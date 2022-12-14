---
title: "AppStore schemes database"
description: AppScan computed more than 5000 top ranked app data to build the first URL schemes database 
permalink: appscan-appstore-database-url-schemes-analysis.html
categories:
  - AppStore
  - AppScan
  - Database
  - Scheme
  - Security
tags:
  - Scheme
  - Security
image: /assets/images/illustrations/appscan-hijacked-schemes.png
header:
    overlay_image: /assets/images/illustrations/appscan-hijacked-schemes.png
    actions:
        -
            label: "Download"
            url: "mailto://hello@appscan-hq.com?subject=AppStore%20schemes%20database"
---

On September 2022, AppScan has scanned more that 5000 Apps in the most top ranked.
Finally, we decided to build a **schemes** database & to published somes of our discoveries.

# App Schemes

App schemes give a way to open your App using a custom declared **scheme**.

## What is a Scheme 

A URL (Uniform Resource Locator) is a unique identifier used to locate a resource.
URLs consist of multiple parts -- including a protocol and domain name -- that tell a web browser how and where to retrieve a resource.

[The documentation of Apple](https://developer.apple.com/documentation/xcode/defining-a-custom-url-scheme-for-your-app) is pretty simple :
- Yes, you can expose custom Scheme to allow other Apps to trigger your app
- But it's bad in terms of security

**Warning**
URL schemes offer a potential attack vector into your app, so make sure to validate all URL parameters and discard any malformed URLs.
In addition, limit the available actions to those that don’t risk the user’s data.
For example, don’t allow other apps to directly delete content or access sensitive information about the user.
When testing your URL-handling code, make sure your test cases include improperly formatted URLs.
{: .notice--danger}
  
So, you can declare a custom **scheme** and your app will be open if someome click on a link [openMyAwesomeApp://](openMyAwesomeApp://)
```
openMyAwesomeApp://
```

but everybody is able to register this, so i can create my hijacking App and declare the same custom **scheme** and my application can be opened instead of yours.



On September 2022, AppScan database contains **5665 Apps**, we compiled the App declared public **schemes** to illustrate the problems and the schemes usage.

## Some metrics about our iOS Schemes database

- 30 schemes are used more that 5 times.
- 347 schemes are used more that one time,
- 13932 unique schemes,

## iOS top hijacked Schemes

| Schemes | number of apps | 
| prefs | 153 | 
| https | 28 | 
| capacitor | 23 | 
| http | 22 | 
| kindle | 17 | 
| tel | 17 | 
| mailto | 17 | 
| sms | 16 | 
| bma4sreceiver | 14 | 
| appcenter- | 12 | 
| expapp000 | 12 | 
| App-Prefs | 10 | 
| app | 8 | 
| otpauth | 8 | 
| amazonmobile | 8 | 
| org-appextension-feature-password-management | 8 | 
| twitterkit-bqNRNye1eU89E7gVP5aam6O6t | 7 | 
| com.googleusercontent.apps. | 7 | 
| oauth-swift | 6 | 
| twitterkit-8WIpExNRasgkylPREYlfqweEg | 6 | 
| com.apple.maps.action | 6 | 
| twitterkit-szwcBj2lCk6nxhm8T6rXj4nc6 | 6 | 
| ssh | 6 | 
| bitcoin | 5 | 

## So what?

- 😋 It's funny, on average, applications declare more than 2 custom URL Schemes. It's not so incredible, if we look deeper inside, multiple time it's explained by the external login process of Facebook, Twitter, etc, because you have to expose an entry to be called back by the third party oauth.

- 😤 What is very concerning in the fact that 347 schemes are used by multiple Apps, so be aware than trying to open an App using a URL scheme doesn't guaranty you to open that App. It's a random process.

- 😵‍💫 Some Apple **schemes** are supposed to be private ... i don't know why Apple doesn't reject those Apps

- 😡 More concerning, some **schemes** are really not recommended
    - those 30 ones overused
    - the 347 hijacked (if you are not sure that your App is the one opened...)

- 🤬 Some **schemes** are very close of the system : `https://`, `http://, `prefs://`, `tel://`, `sms://` and i'm not sure there is a desire of Apple to open them on the system (not as the mailto://) 

- 🍏 Even more for Public "Security" scheme `org-appextension-feature-password-management://` ... Is it normal for Apple to allow this kind of thing?