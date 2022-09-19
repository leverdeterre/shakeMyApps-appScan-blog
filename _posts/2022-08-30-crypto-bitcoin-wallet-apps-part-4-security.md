---
title: "Crypto Apps - Benchmark - Part 4 - Security"
description: 
permalink: appscan-crypto-apps-part-4-security.html
categories:
  - Audits
  - Benchmark
  - Security

tags:
  - Security
  - NSAppTransportSecurity
---

Apps relative to crypto are very recent.
We wanted to study those Apps to make an smart article about technical stacks & good practices.

What are the good things?

What are the bad things in those about?
  
What are the important points if you want to start to build a new App?
  
To study those questions we have decided to take the most trendy applications and to compare them on technical aspects.


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
- [Part 1 - Introduction]({% post_url 2022-08-27-crypto-bitcoin-wallet-apps-part-1-introduction %}) 
- [Part 2 - Resources]({% post_url 2022-08-28-crypto-bitcoin-wallet-apps-part-2-resources %}) 
- [Part 3 - Interactions]({% post_url 2022-08-29-crypto-bitcoin-wallet-apps-part-3-interactions %}) 
- 👉 [Part 4 - Security]({% post_url 2022-08-30-crypto-bitcoin-wallet-apps-part-4-security %}) 

  
# App Security
  
The security score is actually evaluated by checking 3 things : 
- detect "risky" files inside the app bundle (something human readable that might contains important informations)
- detect bad security configuration 
- detect api keys/token easy to hijack

| App                                                                                                                                           | Security Score    | Important files         | Critical keys/values      | No App Security adjusted  | 
| :---                                                                                                                                          |     :---:         |   :---:                    |  :---:                       |  :---:                    |
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet                       | 4 (5)             | 😡 (.cer, .der)             | 👌                          | 👌                        | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com  - Buy Bitcoin, ETH                 | 4                 | 😡 (.xml, .json, .yml)       | 😡                          | 👌                        | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                            | 4                 | 😡 (.cer, .json)           | 👌                           | 😡 (NSAppTransportSecurity)      | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                                | 3                 | 😡 (.xcconfig, .json)     | 👌                         | 😡 (NSAppTransportSecurity)                        |
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet                           | 3                 | 😡 (.der, .json)            | 😡                          | 😡 (NSAppTransportSecurity)                        | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether                      | 3                 | 😡 (.cer, .der, .yml,.md)   | 😡                          | 😡 (NSAppTransportSecurity)                        |
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                                  | 3                 | 😡 (.xml,.json,.js)        | 😡                         | 😡 (NSAppTransportSecurity)                        |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto                        | 3                 | 😡 (.json, .js, .txt))       | 😡                          | 😡  (NSAppTransportSecurity)                       |

- MetaMask is over the other, we only detect some .cer & .der files which can be usefull for security validation
- Lot of Apps are exposing apiKeys & critical tokens inside readable sources (Info.plist for example)
- Too much Apps are updating the NSAppTransportSecurity ... this parameter reduce the App security
- I would consider Apps to be more secure because alternatives create more data inside "readable" format (.json, .txt, .js, .yml). Those files can contains important data.
{: .notice--warning}