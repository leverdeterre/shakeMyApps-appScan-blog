---
title: "Crypto Apps - Benchmark - Part 4 - Security"
description: Security analysis of the most important crypto Apps.
permalink: appscan-crypto-apps-part-4-security.html
categories:
  - Audits
  - Benchmark
  - Security

tags:
  - Security
  - NSAppTransportSecurity

image: /assets/images/illustrations/appscan-cryptos-snow.png
header:
    overlay_filter: 0.5 # same as adding an opacity of 0.5 to a black background
    overlay_image: /assets/images/illustrations/appscan-cryptos-snow.png
---

Apps relative to crypto are very recent.
We wanted to study those Apps to make an smart article about technical stacks & good practices.

This article is the last of this serie :
- [Part 1 - Introduction]({% post_url 2022-08-27-crypto-bitcoin-wallet-apps-part-1-introduction %}) 
- [Part 2 - Resources]({% post_url 2022-08-28-crypto-bitcoin-wallet-apps-part-2-resources %}) 
- [Part 3 - Interactions]({% post_url 2022-08-29-crypto-bitcoin-wallet-apps-part-3-interactions %}) 
- 👉 [Part 4 - Security]({% post_url 2022-08-30-crypto-bitcoin-wallet-apps-part-4-security %}) 

# App Security

The security score is actually evaluated by checking 3 things : 
- detect "risky" files inside the app bundle (something human readable that might contains important informations)
- detect bad security configuration 
- detect api keys/token easy to hijack

| App                                                                                                                                           | Security Score    | 
| :---                                                                                                                                          |     :---:         | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet                       | 4.40             |
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether                      | 4.40                 | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com  - Buy Bitcoin, ETH                 | 4.10                 |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                            | 3.80                 |
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                                  | 3.40                 |
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                                | 3.40               |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet                           | 2.80                 | 
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto                        | 2.10                 | 


  
**A risk for you?**
- The risk can be detected for the End User, for example, if the security layer is removed of the HTTP exchange.
- The risk can be on the Company side, for example, if some secrets are easy to discover just using the app binary like i did.
{: .notice--warning}


## Risks due to the App configuration

Each Apps can adapt a very important security layer between the App and internet.
In this section, we scan the Apps [NSAppTransportSecurity](https://developer.apple.com/documentation/bundleresources/information_property_list/nsapptransportsecurity) configuration.

Only 2 Apps don't modify this security layer 
- MetaMask - Blockchain Wallet
- Crypto.com  - Buy Bitcoin, ETH  
  
  
The others Apps are reducing the App security using some parameters
- **NSAllowsArbitraryLoads** : A Boolean value indicating whether App Transport Security restrictions are disabled for all network connections.
- **NSAllowsLocalNetworking** : A Boolean value indicating whether to allow loading of local resources.
- **NSAllowsArbitraryLoadsInWebContent** : A Boolean value indicating whether all App Transport Security restrictions are disabled for requests made from web views.
- **NSExceptionAllowsInsecureHTTPLoads** : A Boolean value indicating whether to allow insecure HTTP loads.  
  
  
## Risky keys/values

Some places inside the App are protected and not easy to read (for exemple the executable element of the App).
In a lot of Apps, we can detect some important keys/values not stored at the right place.

Only 3 Apps are not storing critical value in a low security environement
- MetaMask - Blockchain Wallet
- CoinMarketCap
- FTX (anciennement Blockfolio)           

## Risky files
  
An package App is not so complicatd to get and to inspect.
The packaging is not a good protection because an App package is just a zip file 🤯.
AppScan analyse the entire content of the package :
- Main bundle,
- Each bundles,
- Each librairies, frameworks,
- All files in the App.

The idea is to detect files that can contains infomrations in a more or less readable format.
All those files with extensions has been detected in the Apps.

- **.cer, .der**, those files are certificates, probably to if the server is really the real server
- **.xml, .yml**, data files, fully readdable, we can get lot of informations exploring them 
- **.json**, fully readdable, we can get lot of informations exploring them 
- **.xcconfig**, really not a normal place in an App ... it's a configuration file for Xcode
- **.md, .txt**, text files ... sometimes readMe, release notes, etc 
- **.js**, yes, some JS files can be very interesting and contains lot of data.

## Conclusion

- MetaMask is over the other, we only detect some .cer & .der files which can be usefull for security validation
- Lot of Apps are exposing apiKeys & critical tokens inside readable sources (Info.plist for example)
- Too much Apps are updating the NSAppTransportSecurity ... this parameter reduce the App security
- I would consider Apps to be more secure because alternatives create more data inside "readable" format (.json, .txt, .js, .yml). Those files can contains important data.
{: .notice--warning}