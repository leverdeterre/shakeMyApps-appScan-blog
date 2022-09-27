---
title: "Crypto Apps - Benchmark - Part 1 - Introduction"
description: Introduction to the technical analysis and benchmark of the most important crypto Apps.
permalink: appscan-crypto-apps-part-1-introduction.html
categories:
  - Audits
  - Benchmark
  - AppScore

tags:
  - AppSize
  - Native
  - Xamarin
  - Flutter
  - React Native

image: /assets/images/illustrations/appscan-cryptos-snow.png
header:
    overlay_filter: 0.5 # same as adding an opacity of 0.5 to a black background
    overlay_image: /assets/images/illustrations/appscan-cryptos-snow.png
---

Apps relative to crypto are very recent and now common on the AppStore.
We wanted to study those Apps to make an smart article about technical stacks & good practices.

What are the good things?

What are the bad things in those about?
  
What are the important points if you want to start to build a new App?
  
To study those questions we have decided to take the most trendy applications and to compare them on technical aspects :
  
| App name | BundleID  | version |
| :---        |     :--- |  :---: |
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet       | ee.mtakso.client | 65.1 |
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (Blockfolio)                             | com.blockfolio.blockfolio | 4.10.5 |
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap            | com.coinmarketcap.CoinMarketCap | 4.2.0 |
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether      | com.vilcsak.bitcoin2 |  10.29.4 |
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com  - Buy Bitcoin, ETH | co.mona.Monaco | 3.143 | 
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto        | com.czzhao.binance | 2.50.0 |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet           | kzencorp.mobile.ios | 4.1.2 |
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                  | com.etoro.wallet | 48.0.0 |

  
This article is the one a serie :
- 👉 [Part 1 - Introduction]({% post_url 2022-08-27-crypto-bitcoin-wallet-apps-part-1-introduction %}) 
- [Part 2 - Resources]({% post_url 2022-08-28-crypto-bitcoin-wallet-apps-part-2-resources %}) 
- [Part 3 - Interactions]({% post_url 2022-08-29-crypto-bitcoin-wallet-apps-part-3-interactions %}) 
- [Part 4 - Security]({% post_url 2022-08-30-crypto-bitcoin-wallet-apps-part-4-security %}) 

  
**TLDR;**

- There is native Apps and Apps developed using a cross plateform solutions.
- All Apps can provide a very rich User Experience and extends the system using App Extensions or interact with other Apps to improve the journey of a User.
- The applications are characterized by the number of interactions with the system and the possible interactions with other Apps.
- The packaging is really different depending on the technology of the application and this leads to resources not optimized and some security weaknesses.


  
# AppScores 

AppScore give an objective & synthetic vision of any Apps, just by focusing on quality criteria.
[If you want to get more details about AppScore computation]({% post_url 2022-07-01-appscore-definition %})

| App | AppScore  |
| :---        |     :--- |
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet       | 4.77 | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (Blockfolio)                | 4.14 | 
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
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto            | Native & Flutter | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                | Flutter | 
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet               | Reach Native | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether          | Reach Native | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                    | Reach Native | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                      | Web | 

- A lot af alternative technologies are used
- Native is not the most common implementation
- 3 React Native Apps and 2 Flutter Apps
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


