<p align = "center">
	<img alt = "Header" src = "img/header.png">
</p>

<table>
	<td align = "center">
		<a href = "https://wax.io/blog/introducing-the-wax-creator-a-self-service-tool-to-create-nfts-on-the-wax-blockchain">About WAX Creator</a>
	</td>
	<td align = "center">
		<a href = "https://github.com/worldwide-asset-exchange/wax-creator">API Documentation for WAX Creator</a>
	</td>
	<td align = "center">
		<a href = "https://creator.wax.io">WAX Collectible Creator</a>
	</td>
	<td align = "center">
		<a href = "https://opskins.com">Buy & Sell Collectibles</a>
	</td>
	<td align = "center">
		<a href = "https://trade.wax.io">Trade Collectibles</a>
	</td>
</table>

#### Table of Contents

* [Overview](#overview)
	* [Extensions](#extensions)
		* [PHP](#php)
			* [Recommended](#recommended)
			* [Other](#other)
		* [Node.js](#nodejs)
			* [Recommended](#recommended-1)
			* [Other](#other-1)

# Overview

The [WAX Creator API](https://github.com/worldwide-asset-exchange/wax-creator) allows developers to create [NFTs](https://en.wikipedia.org/wiki/Non-fungible_token) (WAX Collectible Cards, WAX Stickers & WAX Digital Art) on the WAX Blockchain for free via external sources. NFTs must be approved by the [OPSkins support team](https://opskins.com/?loc=support_tickets), before minted on the WAX Blockchain, and sent to the issuer's [WAX Trade Inventory](https://trade.wax.io/inventory). A NFT can be `Verified Authentic`, meaning proof of ownership can be provided for that NFT. `Verified Authentic` NFTs can be assigned an `Instant-Sell` value opposed to non-`Verified Authentic` NFTs. Additionally, NFTs can also be assigned `Attributes` (this can be useful for card games, for example).

> **Note**: `Verified Authentic` NFTs take longer to approve than non-`Verified Authentic` NFTs. The `Verified Authentic` status of an NFT is shown on [WAX Trade](https://trade.wax.io) and [OPSkins](https://opskins.com).

> **Note**: You need WAX Points to create a collectible with `Instant-Sell` enabled.

## Extensions

### PHP

#### Recommended

- [Execute API Call](includes/execute_api_call.php)

#### Other

- (None)

### Node.js

#### Recommended

- (None)

#### Other

- (None)

Know of an extension that isn't listed above? [Open an issue](../../issues) and it will be added to the list!

> **Note**: Although there are many different extensions you can use (not limited to the list above) to invoke the WAX ExpressTrade API, the first extension under `Recommended` in each category will be the extension used in this tutorial - you are free to use any other extension however!