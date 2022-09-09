---
title: "Crypto, Bitcoin, Wallet Apps - AppScan audits"
categories:
  - AppAudits
  
tags:
  
---

The Apps relative to crypto are very recent.
We wanted to study those Apps to make an interesting article about technical stacks, good practices.
What are the good things?
What are the bad things in those about?
If you want to start to build a new App what are the important points?
To study those questions we have decided to take the most trendy applications and to compare then on technical aspects.

## Global AppScores 

I created an AppScore to have an objective & synthetic vision of any Apps, just by monitoring some "quality" points.
[If you want to get more details about AppScore computation]({% post_url 2022-07-01-appscore-definition %})

| App | AppScore  |
| :---        |     :--- |
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet       | 4.77 | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                | 4.14 | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap            | 4.14 | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether      | 4.05 | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com  - Buy Bitcoin, ETH | 4.00 | 
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto        | 3.95 | 
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet           | 3.64 | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                  | 3.41 | 

- MetaMask is clearly over the other apps
{: .notice--warning}

## Technologies 

The technologies is evaluated using multiple hints inside the App bundle.

| App | Technology  |
| :---     |  :--- |
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH      | Native | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet           | Native |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto            | Flutter | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                | Flutter | 
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet               | Reach Native | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether          | Reach Native | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                    | Reach Native | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                      | Web | 

- A lot af alternative technologies are used
- Native is not the most common implementation
- 3 React Native Apps and 2 Flutter Apps
- Only 2 full Native Apps
{: .notice--warning}

## Minimal iOS version 

| App | Minimal iOS version  |
| :---        |     :---: |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet    | 11.0 | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                       | 11.0 |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                     | 11.0 | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)     | 11.0 | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether     | 12.0 | 
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto     | 12.0 | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet      | 12.0 | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH     | 13.0 | 

- Crypto.com requires iOS 13.0 which is not a bad idea but you loose some % of devices
{: .notice--warning}

## App Size
App size is important to be able to be easyly installed and not to limited because of the network.
And not be the 1st application uninstalled if the device has less space.

| App | Size  |
| :---        |     :--- |
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)     | 28 Mb | 
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet    | 56 Mb | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether     | 66 Mb | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                     | 70 Mb | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                       | 79 Mb | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet      | 117 Mb | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH     | 246 Mb | 
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto     | 540 Mb | 

- Binance, why is it so big?
    - a lootttt of assets in a lot of internal frameworks.
- Crypto.com,  why is it so big?
    - lot of assets (of big assets) ... maybe time to migrate to more vectorial integrations
{: .notice--warning}

## App Permissions

The App permissions give us an overview of the capabilies of an App and discover the features.

| App                               | FaceID | Photos   | Camera  | Location | Siri   | Microphone | NFC     | Tracking | Calendar | Contacts | 
| :---                              |  :---: |    :---: |   :---: |  :---:  | :---:  |   :---:    |   :---: |   :---: |   :---: | :---: |
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet      | ❌     | ✅       | ✅     | ✅       | ✅     | ✅         | ✅     | ✅     | ✅     | ❌     |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto     | ✅     | ✅       | ✅     | ✅       | ❌     | ✅         | ✅     | ✅     | ❌     | ❌     |
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH     | ✅     | ✅       | ✅     | ✅       | ❌     | ✅         | ❌     | ✅     | ❌     | ✅     |
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether     | ✅     | ✅       | ✅     | ✅       | ❌     | ✅         | ❌     | ✅     | ❌     | ✅     |
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)     | ✅     | ✅       | ✅     | ✅       | ❌     | ❌         | ❌     | ✅     | ✅     | ✅     |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %}  ZenGo: Crypto & Bitcoin Wallet    | ✅     | ✅       | ✅     | ✅       | ❌     | ❌         | ❌     | ❌     | ❌     | ❌     |
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                       | ✅     | ✅       | ✅     | ❌       | ❌     | ❌         | ❌     | ❌     | ❌     | ❌     |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                     | ✅     | ✅       | ✅     | ❌       | ❌     | ❌         | ❌     | ✅     | ❌     | ❌     |

- All the Apps ask for **Photos & Camera**... probably for the Id validation or Credit Card scan
- **FaceID** is implemented for almost all the Apps ... it's a simple way to securize the App content and check the owner of the device before presenting the App data. 
- **Tracking librairies¨¨ are officially implemented on most of the Apps and developers provide a message to explain this.
- **NFC reader** feature seems to be very interesting features implemented only MetaMask & Binance
- **Siri** usage is used by only MetaMask, maybe for very good usage and this is a great technique to get a little closer to Apple  
- **Calendar** & **Contacts** access are other interesting permissions but not implemented in a lot of Apps.
{: .notice--warning}

## App Resources

In this section, we check to important metrics about the packageing of the App.
- How are managed the images? package in Assets (to be optimized by Apple on the App installation), or not?
- How is configured the language support? Permissions are well localized? Is there missing values? 

| App                                                                                                                               | AppScore | Details | 
| :---                                                                                                                              |  :---: |    :--- | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet           | 6     |  {::nomarkdown}<ul><li>40 languages</li><li>Plurals management </li><li>Images packaged in assets </li>  </ul>{:/}  |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto            | 5     |  {::nomarkdown}<ul><li>9 languages</li><li>Localized strings Custom Flutter (JSON file) </li><li>Images packaged in assets </li>  </ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH      | 4.5   |  {::nomarkdown}<ul><li>20 languages</li><li>Some missing translations detected </li> <li>Images packaged in assets </li>  </ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                | 4.5   |  {::nomarkdown}<ul><li>21 languages</li><li>Some missing translations detected </li> <li>Images packaged in assets </li>  </ul>{:/}  |  | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether          | 3     |  {::nomarkdown}<ul><li>18 languages</li><li>images not optimized in assets </li><li>@1x/2x/@3x</li><li>image scales missing/li></ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                    | 2.5   |  {::nomarkdown}<ul><li>18 languages</li><li>images not optimized in assets </li><li>@1x/2x/@3x</li><li>image scales missing/li></ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet               | 2.5   |  {::nomarkdown}<ul><li>1 language</li><li>images not optimized in assets </li><li>@1x/2x/@3x</li></ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                      | 2.5   |  {::nomarkdown}<ul><li>no official language declared (but custom in App) </li><li>images not optimized in assets </li><li>@1x/2x/@3x</li></ul>{:/}| 

## App interactions

### with other Apps

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
- Cydia is a good idea to detect jailbroken device and limit the App. 
{: .notice--warning}

### with the system

Interactions with the system give your App a real sense for the User and a lot of way to interact with her.

| App                                                                                                                       | iCloud service   | Universal links | Apple Pay  | Wallet    | Keychain group  | Apple Sign-In   | NFC reader | web credentials | 
| :---                                                                                                                          | :---:            | :---:           | :---:      | :---:     | :---:           | :---:           | :---:      | :---: | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether      | ✅               | ✅             | ✅         | ✅        | ✅              | ❌             | ❌         | ✅ |
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet       | ❌               | ✅             | ✅         | ❌        | ✅             | ✅             | ✅         | ❌ |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto        | ✅               | ✅             | ❌         | ❌        | ✅             | ✅             | ✅         | ✅ |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %}  ZenGo: Crypto & Bitcoin Wallet          | ✅               | ✅             | ❌         | ❌        | ❌              | ❌             | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                  | ❌               | ❌             | ❌         | ❌        | ✅             | ✅             | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap            | ❌               | ✅             | ❌         | ❌        | ✅             | ❌             | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                | ❌               | ✅             | ❌         | ❌        | ✅             | ✅             | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH  | ❌               | ✅             | ✅         | ❌        | ✅             | ❌             | ❌         | ❌ |


### extensions

The App extensions are external components to increase the App visibility on the system. 

| App                               | Widget (old)  | Widget(s) | Siri  | ReplayKit | Notification service | 
| :---                              | :---:         | :---:     | :---: | :---:     | :---: |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto        | ✅            | ✅          | ✅ | ✅         | ❌ |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap            | ❌            | ✅          | ✅ | ❌         | ✅ |
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether      | ❌            | ✅          | ✅ | ❌         | ❌ | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                | ❌            | ✅          | ✅ | ❌         | ❌ |
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %}Crypto.com - Buy Bitcoin, ETH   | ❌            | ❌          | ❌ | ❌         | ✅ | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet       | ❌            | ❌          | ❌ | ❌         | ✅ | 
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %}  ZenGo: Crypto & Bitcoin Wallet          | ❌            | ❌          | ❌ | ❌         | ❌ | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                  | ❌            | ❌          | ❌ | ❌         | ❌ |



## App Security

The security score is actually evaluated by checking 3 things : 
- detect "risky" files inside the app bundle (something human readable that might contains important informations)
- detect bad security configuration 
- detect api keys easy to stole

| App | Security Score  |
| :---        |     :--- |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet    | 3 | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether     | 3 | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                       | 3 | 
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto     | 3 | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                     | 4 | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)     | 3 | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com  - Buy Bitcoin, ETH    | 4 | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet      | 4 | 

