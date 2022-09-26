---
title: "Crypto Apps - Benchmark - Part 3 - Interactions"
description: Technical analysis of crypto Apps interactions with the system & the other Apps.
permalink: appscan-crypto-apps-part-3-interactions.html
categories:
  - Audits
  - Benchmark
  - App Interactions
  - System Interactions

tags:
  - Scheme
  - Queried Scheme
  - App Extensions

image: /assets/images/illustrations/appscan-cryptos-snow.png
header:
    overlay_image: /assets/images/illustrations/appscan-cryptos-snow.png
---

Apps relative to crypto are very recent.
We wanted to study those Apps to make an smart article about technical stacks & good practices.

What are the good things?

What are the bad things in those about?
  
What are the important points if you want to start to build a new App?
  
To study those questions we have decided to take the most trendy applications and to compare them on technical aspects :

This article is the third of the serie :
- [Part 1 - Introduction]({% post_url 2022-08-27-crypto-bitcoin-wallet-apps-part-1-introduction %}) 
- [Part 2 - Resources]({% post_url 2022-08-28-crypto-bitcoin-wallet-apps-part-2-resources %}) 
- 👉 [ Part 3 - Interactions]({% post_url 2022-08-29-crypto-bitcoin-wallet-apps-part-3-interactions %}) 
- [Part 4 - Security]({% post_url 2022-08-30-crypto-bitcoin-wallet-apps-part-4-security %}) 
  
**TLDR;**
  
- There is native Apps and Apps developed using a cross plateform solutions.
- All Apps can provide a very rich User Experience and extends the system using App Extensions or interact with other Apps to improve the journey of a User.
- The applications are characterized by the number of interactions with the system and the possible interactions with other Apps.
- The packaging is really different depending on the technology of the application and this leads to resources not optimized and some security weaknesses.

   
# App interactions

## Interactions with other Apps

An app can interact with other Apps, but to do that the App must declare a list of Apps to interact with.
This list give the possibility to the App to ask to open the other Apps for specific actions.

| App | Number of apps | Social Apps | Mails Apps | Wallet Apps | Jailbreak Apps |
| :---        | :---:    |  :---:    | :---:    | :---:    |   :---: |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet  | 6 apps  | ❌ | ✅ | ❌ | ❌ | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether   | 17 apps | ✅ | ✅ | ✅ | ❌ |
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                     | 1 app   | ✅ | ❌ | ❌ | ❌ |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto   | 5 apps  | ❌ | ❌ | ✅ | ❌ |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                   | 10 apps | ✅ | ✅ | ❌ | ❌ |
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)   | 10 apps | ✅ | ✅ | ❌ | ❌ |
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH   | 5 apps  | ❌ | ✅ | ❌ | ✅ |
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet    | 5 apps  | ✅ | ❌ | ❌ | ❌ |

- Yes, Mail Apps make sense to give the user a way to share things, and maybe optimize actions.
- Social Apps (WhatsApp, Instagram, Facebook, Twitter), give the user a way to share content or to log.
- Wallet Apps can be interesting to interact with (or to know that a User has alternative)
- Cydia is a good idea to detect jailbroken devices and maybe limit the usage of the App. 
{: .notice--warning}

## Interactions with the system

Interactions with the system give your App a real sense for the Users and provide lots of way to interact with her.

| App                                                                                                                           | iCloud service   | Universal links | Apple Pay  | Wallet    | Keychain group  | Apple Sign In   | NFC reader | web credentials | 
| :---                                                                                                                          |  :---:           |    :---:        |   :---:    |  :---:    | :---:           |   :---:         |   :---:     |   :---:        |   
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether      | ✅               | ✅             | ✅         | ✅        | ✅              | ❌             | ❌         | ✅ |
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet       | ❌               | ✅             | ✅         | ❌        | ✅             | ✅             | ✅         | ❌ |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto        | ✅               | ✅             | ❌         | ❌        | ✅             | ✅             | ✅         | ✅ |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %}  ZenGo: Crypto & Bitcoin Wallet          | ✅               | ✅             | ❌         | ❌        | ❌              | ❌             | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                  | ❌               | ❌             | ❌         | ❌        | ✅             | ✅             | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap            | ❌               | ✅             | ❌         | ❌        | ✅             | ❌             | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                | ❌               | ✅             | ❌         | ❌        | ✅             | ✅             | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH  | ❌               | ✅             | ✅         | ❌        | ✅             | ❌             | ❌         | ❌ |

- **Universal links**, most of those Apps declare universal links (the fact to redirect the User inside the App if we navigate to an url of the website)
- **Apple Pay**, the App can do payment or transferts using ApplePay (it's always better than having to give a Credit Card)
- **Wallet**, only Coinbase has developped a Coinbase Card integrated to Wallet 
- **Keychain group**, a powerfull technology to store safely the data and share this with your other Apps & extensions.
- **Apple Sign In**, the Apple authentication process, only implemented by 50% of those Apps. 
- **NFC Reader**, interesting features linked to NFC scanning and probably some partners integration to the Apps. 
- **Web Credentials**, surprisly not the most implemented feature but very important to be able to share the User credentials with the web brower.
{: .notice--warning}

## Integrations inside the system

The App extensions are external components to increase the App visibility on the system.

| App                                                                                                                           | Widget (old)  | Widget(s) | Siri  | ReplayKit | Notification service | 
| :---                                                                                                                          | :---:         | :---:     | :---: | :---:     | :---: |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto        | ✅            | ✅          | ✅ | ✅         | ❌ |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap            | ❌            | ✅          | ✅ | ❌         | ✅ |
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether      | ❌            | ✅          | ✅ | ❌         | ❌ | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                | ❌            | ✅          | ✅ | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %}Crypto.com - Buy Bitcoin, ETH   | ❌            | ❌          | ❌ | ❌         | ✅ | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet       | ❌            | ❌          | ❌ | ❌         | ✅ | 
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %}  ZenGo: Crypto & Bitcoin Wallet          | ❌            | ❌          | ❌ | ❌         | ❌ | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                  | ❌            | ❌          | ❌ | ❌         | ❌ |

- **OLD Widget**, Binance is the only one to provivide this old version of the Widget for the lower iOS versions 👏.
- **new Widget**, new SwiftUI widget. Cool to present some synthetic information withtout starting the App.
- **Siri**, "hello Siri i want to do something". You can talk to your device and present actions.
- **Notification Service**, a service to improve the presentation of the content of the notifications for the user. 
- **ReplayKit**, interesting service (use only by Binance), probably to record/save some actions on device and your face for security reasons.
{: .notice--warning}
