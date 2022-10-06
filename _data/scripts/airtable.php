<?php

// https://airtable.com/appN7JjI2g9OG3Wxz/api/docs#curl/ratelimits

$base_id = "appN7JjI2g9OG3Wxz";
$table_ipa_scan_id = "tblPjDvIpJQpDKyD4";
$api_key = "keypE462Srir0rrcJ";

function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

function updateRecord($api_key, $base_id, $table_id, $record) {
    $url = 'https://api.airtable.com/v0/' . $base_id . '/' . $table_id. "?api_key=$api_key";
    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key,
    );

    $records = [];
    unset($record['createdTime']);
    unset($record["fields"]['Last Modified Time']);
    $records["records"] = [$record];
    $json_array = $records; 
    $body = json_encode($json_array);
    // print("$url\n");
    // print("REQ\n");
    // print_r($body);
    // print("\n");

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $r = curl_exec($ch);
    // print("RES\n");
    // print_r($r);
    curl_close($ch);
}

function getAppScoreScanRequests($api_key) {
    $url = "https://api.airtable.com/v0/appN7JjI2g9OG3Wxz/tbldquKgyM5T5Z6ej?api_key=$api_key";
    $data = curl($url);
    $json = json_decode($data, true);
    print_r($json);
}


function getIpaScanRequests($api_key, $table_ipa_scan_id) {
    $url = "https://api.airtable.com/v0/appN7JjI2g9OG3Wxz/$table_ipa_scan_id?api_key=$api_key";
    $data = curl($url);
    $json = json_decode($data, true);
    // print_r($json);
    return $json;
}

function downloadFileUrl($url) {
    $file_name = basename($url);
      
    // Use file_get_contents() function to get the file
    // from url and use file_put_contents() function to
    // save the file by using base name
    if (file_put_contents($file_name, file_get_contents($url)))
    {
        echo "File downloaded successfully\n";
    }
    else
    {
        echo "File downloading failed.\n";
    }
}

function uploadTempFile($filepah, $filename) {
    // curl -T file temp.sh
    // curl --upload-file ./hello.txt https://transfer.sh/hello.txt 
    exec("curl --upload-file $filepah https://transfer.sh/$filename > curl_ouptput");
    return file_get_contents("curl_ouptput");
}


// getAppScoreScanRequests();

function consumeIpaScanRequests($api_key, $base_id, $table_ipa_scan_id){
    print("getIpaScanRequests\n");
$result = getIpaScanRequests($api_key, $table_ipa_scan_id);
$records = $result["records"];

foreach($records as $record){
    $id = $record["id"];
    $fields = $record["fields"];
    $toEmail = $fields["toEmail"];
    $Status = "Todo";
    if (array_key_exists('Status', $fields)) {
        $Status = $fields["Status"];
    }
    $Attachments = $fields["Attachments"];
    $Attachment = $Attachments[0];

    if ($Status == "Todo") {
        $filename = $Attachment["filename"];
        $url = $Attachment["url"];
        downloadFileUrl($url);
        if (file_exists($filename)){
            echo "Start analysis ! \n";
        }

        // In progress
        print("update Airtable Record Status -> In progress\n");
        $record["fields"]["Status"] = "In progress";
        updateRecord($api_key, $base_id, $table_ipa_scan_id, $record);

        // generate AppScan
        $pwd = exec("pwd");
        exec("rm -rf airtable_temp");
        exec("mkdir airtable_temp");
        exec("cp $filename airtable_temp/$filename");
        exec("echo \"$pwd/airtable_temp/$filename\" > airtable_temp/ipas.txt");
        exec("/Users/jeromemorissard/Library/Developer/Xcode/DerivedData/ShakeMyApps-aunndhrbilnubbchihqfeqclmsra/Build/Products/Debug/ShakeMyApps.app/Contents/MacOS/ShakeMyApps -ipas \"$(pwd)/airtable_temp/ipas.txt\"");

        //.ipa", with: "_appscan.html"
        $filename_appscan_html = str_replace(".ipa", "_appscan.html", "$pwd/airtable_temp/$filename");
        $filename_sonar_metrics_html = str_replace(".ipa", "_sonar_metrics.html", "$pwd/airtable_temp/$filename");
        $filename_appscore_txt = str_replace(".ipa", "_appscore.txt", "$pwd/airtable_temp/$filename");

        $filename_appscan_html_remote_url = uploadTempFile($filename_appscan_html, "appscan.html");
        $filename_sonar_metrics_html_remote_url = uploadTempFile($filename_sonar_metrics_html, "sonar_metrics.html");
        $filename_appscore_txt_remote_url = uploadTempFile($filename_appscore_txt, "appscore.txt");

        $record["fields"]["Status"] = "Done";
        $Outputs = [];
        $output = [];
        $output["url"] = $filename_appscan_html_remote_url;
        array_push($Outputs, $output);

        $output = [];
        $output["url"] = $filename_sonar_metrics_html_remote_url;
        array_push($Outputs, $output);

        $output = [];
        $output["url"] = $filename_appscore_txt_remote_url;
        array_push($Outputs, $output);
        $record["fields"]["Outputs"] = $Outputs;

        print("update Airtable Record add Outputs\n");
        updateRecord($api_key, $base_id, $table_ipa_scan_id, $record);

        print("Clean up the path");
        exec("rm -rf airtable_temp");
        exec("rm curl_ouptput $filename");
    }
}
}


do {
    consumeIpaScanRequests($api_key, $base_id, $table_ipa_scan_id);
    sleep(60);

} while (true);

?>
