---
title: "AppScan - audit"
categories:
  - AppStore
  - Product
  - 
tags:
  - ipa
  - scan
  - audit

---

Lot's of informations are [extracted and collected for each ipas.]({% post_url 2022-08-01-data-collection %}) 
An AppScan algirithms are able to analyse and provide recommendations.

| Collected information | Analysis  |
| :---        |     :--- |
| Xcode version         | {::nomarkdown}<ul><li>check is it's the major version</li><li>check is it's the min version</li></ul>{:/}  |
| App technology        | {::nomarkdown}<ul><li>Detect the technology of the App : Native, React Native, Flutter, Cordova, Xamarin, Web</li></ul>{:/}  |
| Info.plist            | {::nomarkdown}<ul><li>Analyse the Apple key/values</li> <li>Detect extra keys ... the value is really not well protected</li></ul>{:/}  |
| Permissions           | {::nomarkdown}<ul><li>Extra the permissions</li> <li>Detect is permissions exists</li>   <li>Detect if permissions is deprecated</li></ul>{:/}  |
| Resources             | {::nomarkdown}<ul><li>Detect missing assets 1x,2x,3x</li> <li>Detect missing Assets management</li>  <li>Analyse the multiple languages management</li>  <li>Analyse Thirdparty librairies (risky, quality, licences) </li> <li>Analyse App featured librairies</li></ </ </ul>{:/}  |
| Security              | {::nomarkdown}<ul><li>Detect risky files</li>  <li>Detect not secure configurations</li> <li>Detect unprotected environments </li> <li>Analyse Scheme usage </li> </ul>{:/}  |
| Cool extra features   | {::nomarkdown}<ul><li>Analyse App Extensions</li>  <li>Analyse Entitlemented features</li> <li>Detect Apple featured SDK : ARKit, SwiftUI </li> </ul>{:/}  |
