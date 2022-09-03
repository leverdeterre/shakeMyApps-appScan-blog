---
title: "Crypto, Bitcoin, Wallet Apps - AppScan audits"
categories:
  - AppAudits
  
tags:
  
---


## AppScores 

I created an AppScore to have a fast vision some "quality" points for the App.
[If you want to get more details about AppScore computation]({% post_url 2022-07-01-appscore-definition %})

| AppName | AppScore  |
| :---        |     :--- |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet    | 3.64 | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether     | 4.05 | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                       | 3.41 | 
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto     | 3.95 | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                     | 4.14 | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)     | 4.14 | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com  - Buy Bitcoin, ETH    | 4.00 | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %}MetaMask - Blockchain Wallet      | 4.77 | 

- MetaMask is clearly over the other apps
{: .notice--warning}

## Technologies 

The technologies is evaluated using multiple hints inside the App bundle.

| AppName | Tech  |
| :---        |     :--- |
| ZenGo: Crypto & Bitcoin Wallet    | Reach Native | 
| Coinbase: Buy Bitcoin & Ether     | Reach Native | 
| eToro Money                       | Web | 
| Binance: Buy Bitcoin & Crypto     | Native + Flutter | 
| CoinMarketCap                     | Native + Flutter | 
| FTX (anciennement Blockfolio)     | Reach Native | 
| Crypto.com - Buy Bitcoin, ETH     | Native | 
| MetaMask - Blockchain Wallet      | Native | 

- It's a supprise to see 3 React Native Apps
- and ONLY 3 Native Apps
- We can discover an interesting strategy of development by mixing Native & Flutter together
- 1 Flutter and 1 web apps
{: .notice--warning}

## Minimal iOS version 

| AppName | Tech  |
| :---        |     :--- |
| ZenGo: Crypto & Bitcoin Wallet    | 11.0 | 
| Coinbase: Buy Bitcoin & Ether     | 12.0 | 
| eToro Money                       | 11.0 | 
| Binance: Buy Bitcoin & Crypto     | 12.0 | 
| CoinMarketCap                     | 11.0 | 
| FTX (anciennement Blockfolio)     | 11.0 | 
| Crypto.com - Buy Bitcoin, ETH     | 13.0 | 
| MetaMask - Blockchain Wallet      | 12.0 | 

- Crypto.com requires iOS 13.0 which is not a bad idea but you loose some % of devices
{: .notice--warning}

## App Size

| AppName | Size  |
| :---        |     :--- |
| ZenGo: Crypto & Bitcoin Wallet    | 56 Mb | 
| Coinbase: Buy Bitcoin & Ether     | 66 Mb | 
| eToro Money                       | 79 Mb | 
| Binance: Buy Bitcoin & Crypto     | 540 Mb | 
| CoinMarketCap                     | 70 Mb | 
| FTX (anciennement Blockfolio)     | 28 Mb | 
| Crypto.com - Buy Bitcoin, ETH     | 246 Mb | 
| MetaMask - Blockchain Wallet      | 117 Mb | 

- Binance WTF?
- Crypto.com WTF?
{: .notice--warning}

## App Permissions

| AppName                           | FaceID | Photos   | Camera  | Location | Siri   | Microphone | NFC     | Tracking | Calendar | Contacts | 
| :---                              |  :---: |    :---: |   :---: |  :---:  | :---:  |   :---:    |   :---: |   :---: |   :---: | :---: |
| ZenGo: Crypto & Bitcoin Wallet    | ✅     | ✅       | ✅     | ✅       | ❌     | ❌         | ❌     | ❌     | ❌     | ❌     |
| Coinbase: Buy Bitcoin & Ether     | ✅     | ✅       | ✅     | ✅       | ❌     | ✅         | ❌     | ✅     | ❌     | ✅     |
| eToro Money                       | ✅     | ✅       | ✅     | ❌       | ❌     | ❌         | ❌     | ❌     | ❌     | ❌     |
| Binance: Buy Bitcoin & Crypto     | ✅     | ✅       | ✅     | ✅       | ❌     | ✅         | ✅     | ✅     | ❌     | ❌     |
| CoinMarketCap                     | ✅     | ✅       | ✅     | ❌       | ❌     | ❌         | ❌     | ✅     | ❌     | ❌     |
| FTX (anciennement Blockfolio)     | ✅     | ✅       | ✅     | ✅       | ❌     | ❌         | ❌     | ✅     | ✅     | ✅     |
| Crypto.com - Buy Bitcoin, ETH     | ✅     | ✅       | ✅     | ✅       | ❌     | ✅         | ❌     | ✅     | ❌     | ✅     |
| MetaMask - Blockchain Wallet      | ❌     | ✅       | ✅     | ✅       | ✅     | ✅         | ✅     | ✅     | ✅     | ❌     |


## App Supported languages ?

| AppName | AppScore | Details | 
| :---        |  :---: |    :--- |
| ZenGo: Crypto & Bitcoin Wallet  | 2  |  {::nomarkdown}<ul><li>US+FR</li><li>Custom React Native implementation</li></ul>{:/}  | 
| Coinbase: Buy Bitcoin & Ether   | 3  |  {::nomarkdown}<ul><li>19 languages</li><li>Custom React Native implementation </li></ul>{:/}  | 
| eToro Money                     | 2  | ? | 
| Binance: Buy Bitcoin & Crypto   | 5?  |  {::nomarkdown}<ul><li>9 languages</li><li>Custom Flutter implementation </li></ul>{:/}  | 
| CoinMarketCap                   | 4  |  {::nomarkdown}<ul><li>23 languages</li><li>Native implementations (multiple .strings) </li></ul>{:/} | 
| FTX (anciennement Blockfolio)   | 2  |  | 
| Crypto.com - Buy Bitcoin, ETH   | 4 |  | 
| MetaMask - Blockchain Wallet    | 40 | 

## App Resources ?

| AppName | AppScore | Details | 
| :---        |  :---: |    :--- |
| ZenGo: Crypto & Bitcoin Wallet  | 3  |  {::nomarkdown}<ul><li>images not optimized in assets </li><li>@1x/2x/@3x</li></ul>{:/}  | 
| Coinbase: Buy Bitcoin & Ether   | 3  |  {::nomarkdown}<ul><li>images not optimized in assets </li><li>@1x/2x/@3x</li></ul>{:/}  | 
| eToro Money                     | 3  | ? | 
| Binance: Buy Bitcoin & Crypto   | 5  |  {::nomarkdown}<ul><li>9 languages</li><li>Custom Flutter implementation </li></ul>{:/}  | 
| CoinMarketCap                   | 5  |  | 
| FTX (anciennement Blockfolio)   | 2  |  | 
| Crypto.com - Buy Bitcoin, ETH   | 5  |  | 
| MetaMask - Blockchain Wallet    | ?  |  | 

## App interactions

### with other Apps

An app can interact with other Apps, but to do that the App must declare a list of Apps to interact with.
This list give the possibility to the App to ask to open the other Apps for specific actions.

| AppName | Number of apps | Social Apps | Mails Apps | Wallet Apps | Jailbreak Apps |
| :---        | :---:    |  :---:    | :---:    | :---:    |   :---: |
| ZenGo: Crypto & Bitcoin Wallet  | 6 apps  | ❌ | ✅ | ❌ | ❌ | 
| Coinbase: Buy Bitcoin & Ether   | 17 apps | ✅ | ✅ | ✅ | ❌ |
| eToro Money                     | 1 app   | ✅ | ❌ | ❌ | ❌ |
| Binance: Buy Bitcoin & Crypto   | 5 apps  | ❌ | ❌ | ✅ | ❌ |
| CoinMarketCap                   | 10 apps | ✅ | ✅ | ❌ | ❌ |
| FTX (anciennement Blockfolio)   | 10 apps | ✅ | ✅ | ❌ | ❌ |
| Crypto.com - Buy Bitcoin, ETH   | 5 apps  | ❌ | ✅ | ❌ | ✅ |
| MetaMask - Blockchain Wallet    | 5 apps  | ✅ | ❌ | ❌ | ❌ |

- Yes, Mail Apps make sense to give the user a way to share things, and maybe optimize actions.
- Social Apps (WahtApps, Instagram, Facebook, Twitter), give the user a way to share content or to log.
- Wallet Apps can be interesting to interact with (or to know that a User has alternative)
- Cydia is a good idea to detect jailbreaken device and limit the App. 
{: .notice--warning}

### with the system

Interactions with the system give your App a real sense for the User and a lot of way to interact with her.

| AppName                         | iCloud service   | Universal links | Apple Pay  | Wallet    | Keychain group  | Apple Sign-In   | NFC reader | web credentials | 
| :---                            | :---:            | :---:           | :---:      | :---:     | :---:           | :---:           | :---:      | :---:| :---: |
| ZenGo: Crypto & Bitcoin Wallet  | ✅               | ✅             | ❌         | ❌        | ❌              | ❌             | ❌         | ❌ |
| Coinbase: Buy Bitcoin & Ether   | ✅               | ✅             | ✅         | ✅        | ✅              | ❌             | ❌         | ✅ |
| eToro Money                     | ❌               | ❌             | ❌         | ❌         | ✅             | ✅             | ❌         | ❌ |
| Binance: Buy Bitcoin & Crypto   | ✅               | ✅             | ❌         | ❌         | ✅             | ✅             | ✅         | ✅ |
| CoinMarketCap                   | ❌               | ✅             | ❌         | ❌         | ✅             | ❌             | ❌         | ❌ |
| FTX (anciennement Blockfolio)   | ❌               | ✅             | ❌         | ❌         | ✅             | ✅             | ❌         | ❌ |
| Crypto.com - Buy Bitcoin, ETH   | ❌               | ✅             | ✅         | ❌         | ✅             | ❌             | ❌         | ❌ |
| MetaMask - Blockchain Wallet    | ❌               | ✅             | ✅         | ❌         | ✅             | ✅             | ✅         | ❌ |

### extensions

The App extensions are external components to increase the App visibility on the system. 

| AppName | Widget (old) | Widget(s) | Siri | ReplayKit	 | Notification service | 
| :---   | :---:| :---:| :---:| :---:| :---: |
| ZenGo: Crypto & Bitcoin Wallet  | ❌ | ❌ | ❌ | ❌ | ❌ | 
| Coinbase: Buy Bitcoin & Ether   | ❌ | ✅ | ✅ | ❌ | ❌ | 
| eToro Money                     | ❌ | ❌ | ❌ | ❌ | ❌ |
| Binance: Buy Bitcoin & Crypto   | ✅ | ✅ | ✅ | ✅ | ❌ |
| CoinMarketCap                   | ❌ | ✅ | ✅ | ❌ | ✅ |
| FTX (anciennement Blockfolio)   | ❌ | ✅ | ✅ | ❌ | ❌ |
| Crypto.com - Buy Bitcoin, ETH   | ❌ | ❌ | ❌ | ❌ | ✅ | 
| MetaMask - Blockchain Wallet    | ❌ | ❌ | ❌ | ❌ | ✅ | 


## App Security

The security score is actually evaluated by checking 3 things : 
- detect "risky" files inside the app bundle (something human readable that might contains important informations)
- detect bad security configuration 
- detect api keys easy to stole


| AppName | Security Score  |
| :---        |     :--- |
| ZenGo: Crypto & Bitcoin Wallet    | 3 | 
| Coinbase: Buy Bitcoin & Ether     | 3 | 
| eToro Money                       | 3 | 
| Binance: Buy Bitcoin & Crypto     | 3 | 
| CoinMarketCap                     | 4 | 
| FTX (anciennement Blockfolio)     | 3 | 
| Crypto.com  - Buy Bitcoin, ETH    | 4 | 
| MetaMask - Blockchain Wallet      | 4 | 

