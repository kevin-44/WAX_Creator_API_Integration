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
* [PHP](#php-1)
	* [Beginners](#beginners)
		* [Local Environment](#local-environment)
		* [Production Environment](#production-environment)
			* [Order/Create a VPS](#ordercreate-a-vps)
			* [Log In & Prepare Your VPS](#log-in--prepare-your-vps)
			* [Create a New User](#create-a-new-user)
			* [Install Dependencies](#install-dependencies)
			* [Register a Domain & Configure Name-based Virtual Hosts](#register-a-domain--configure-name-based-virtual-hosts)
	* [Set up an OPSkins Account](#set-up-an-opskins-account)
		* [Create an Account](#create-an-account)
		* [Enable 2FA (Two-Factor Authentication)](#enable-2fa-two-factor-authentication)
	* [Request an API Key](#request-an-api-key)
	* [Install Dependencies](#install-dependencies-1)
	* [Calling the API](#calling-the-api)
* [Node.js](#nodejs-1)
	* [Beginners](#beginners-1)
		* [Local Environment](#local-environment-1)
		* [Production Environment](#production-environment-1)
			* [Order/Create a VPS](#ordercreate-a-vps-1)
			* [Log In & Prepare Your VPS](#log-in--prepare-your-vps-1)
			* [Create a New User](#create-a-new-user-1)
			* [Install Dependencies](#install-dependencies-2)
			* [Register a Domain & Configure Name-based Virtual Hosts](#register-a-domain--configure-name-based-virtual-hosts-1)
	* [Set up an OPSkins Account](#set-up-an-opskins-account-1)
		* [Create an Account](#create-an-account-1)
		* [Enable 2FA (Two-Factor Authentication)](#enable-2fa-two-factor-authentication-1)
	* [Request an API Key](#request-an-api-key-1)
	* [Install Dependencies](#install-dependencies-3)
	* [Calling the API](#calling-the-api-1)
* [Related APIs](#related-apis)

# Overview

The [WAX Creator API](https://github.com/worldwide-asset-exchange/wax-creator) allows developers to create [NFTs](https://en.wikipedia.org/wiki/Non-fungible_token) (*WAX Collectible Cards, WAX Stickers & WAX Digital Art*) on the WAX Blockchain for free via external sources. NFTs must be approved by the [OPSkins support team](https://opskins.com/?loc=support_tickets), before minted on the WAX Blockchain, and sent to the issuer's [WAX Trade Inventory](https://trade.wax.io/inventory). A NFT can be `Verified Authentic`, meaning proof of ownership can be provided for that NFT. `Verified Authentic` NFTs can be assigned an `Instant-Sell` value opposed to non-`Verified Authentic` NFTs. Additionally, NFTs can also be assigned `Attributes` (this can be useful for card games, for example).

> **Note**: `Verified Authentic` NFTs take longer to approve than non-`Verified Authentic` NFTs. The `Verified Authentic` status of an NFT is shown on [WAX Trade](https://trade.wax.io) and [OPSkins](https://opskins.com).

> **Note**: You need [WAX Points](https://blog.opskins.com/can-now-use-wax-tokens-opskins) to create a collectible with `Instant-Sell` enabled.

## Extensions

### PHP

#### Recommended

- [Execute API Call](includes/execute_api_call.php)

#### Other

- (None)

### Node.js

#### Recommended

- [Simplified HTTP Client](https://github.com/request/request)

#### Other

- (None)

Know of an extension that isn't listed above? [Open an issue](../../issues) and it will be added to the list!

> **Note**: Although there are many different extensions you can use (not limited to the list above) to invoke the WAX Creator API, the first extension under `Recommended` in each category will be the extension used in this tutorial.

# PHP

## Beginners

Before anything, you will need to install a [Web Server](https://en.wikipedia.org/wiki/Web_server) and [PHP](https://en.wikipedia.org/wiki/PHP). If you already know how to do this and you're not interested in registering a domain alongside the configuration that comes with it, skip to the [next step](#set-up-an-opskins-account); otherwise, you can click [here](#register-a-domain--configure-name-based-virtual-hosts) for information related to registering a domain and its configuration.

> **Note**: Instructions related to setting up a [MySQL Server](https://en.wikipedia.org/wiki/MySQL) won't be addressed in this tutorial; however, it's recommended that you go forward with the process if you plan on creating a website that serves user accounts, saves their settings and/or stores any other data in general.

### Local Environment

If you aren't interested in setting up an environment for local development, you can skip directly to [setting up a production environment](#production-environment) (where you can publish your website so anyone can visit it).

---

A **Web Server** and **PHP** can be installed by many different means, although [XAMPP](https://www.apachefriends.org) is an all-in-one package that's incredibly easy to install and use; hence, it's a highly recommended option and you should definitely consider using it!

After installing **XAMPP** (or the above by any other mean), start **Apache** (a.k.a Web Server):

<img alt = "XAMPP - Start Apache (The Web Server)" src = "img/xampp_start_apache_server.png">

Any website you create should be placed in the `htdocs` folder where you installed **XAMPP**. You can access one of your websites at `http://localhost/some-website` via a web browser, where `some-website` is the path to the website you wish to render.

### Production Environment

Hosting a website implies that you rent a [VPS](https://en.wikipedia.org/wiki/Virtual_private_server) (*Virtual Private Server*) from a company of choice to keep it accessible 24/7. There are many companies you can rent a VPS from, although some may require that you submit a whitelist application beforehand (such as [OVH](https://www.ovh.com/world)). If you're looking for a decent VPS that's also quick to set up, [DigitalOcean](https://www.digitalocean.com) is an excellent option!

> **Note**: You can alternatively host your website with a dedicated web hosting provider (such as [HostGator](https://www.hostgator.com)), this would simplify the process a bit and can be a better option if your VPS provider doesn't provide strong protection against attacks using the default configuration. However, many dedicated web hosting providers disable certain features for security reasons - so if you want to be in complete control and/or plan on hosting more than one website while paying the same amount per month, a VPS would be the more convenient option!

#### Order/Create a VPS

Regardless of the company you decide to rent a VPS from, you must get it online with the [OS](https://en.wikipedia.org/wiki/Operating_system) (*Operating System*) of your choice installed. [Ubuntu](https://en.wikipedia.org/wiki/Ubuntu) is recommended for beginners.

<img alt = "DigitalOcean - Create Droplet" src = "img/digitalocean_create_droplet.png">

Typically after creating a VPS, its log in credentials are sent via email - have them ready as you'll need them in the next step!

<img alt = "DigitalOcean - Credentials Email" src = "img/digitalocean_credentials_email.png">

> **Note**: Hosting a website on a [Windows Server](https://en.wikipedia.org/wiki/Windows_Server) is possible; however, it isn't recommended for beginners - many network adjustments must be applied to prevent attacks by third parties.

#### Log In & Prepare Your VPS

You will need an [SSH Client](https://en.wikipedia.org/wiki/Comparison_of_SSH_clients) in order to log into your VPS. [PuTTY](https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html) is vastly recommended!

Run **PuTTY** (or the SSH client of your choice) and connect to your VPS:

<img alt = "PuTTY - Connect" src = "img/putty_connect.png">

A dialog titled `PuTTY Security Alert` will prompt, hit `Yes`:

<img alt = "PuTTY - Security Alert" src = "img/putty_security_alert.png">

Enter the username and password sent to you via email:

<img alt = "PuTTY - Log In" src = "img/putty_log_in.png">

> **Note**: Passwords in the SSH client don't show whatsoever, not even as hidden characters (e.g. ••••••).

As stated in the email from DigitalOcean, you must change your password upon initially logging into your VPS for security reasons:

<img alt = "PuTTY - Change Password" src = "img/putty_change_password.png">

**(Optional)** Not all providers force you to change your password upon initially logging into your VPS, although it's recommended! You can alternatively change your password with the `passwd` command:

<img alt = "PuTTY - Change Password via CMD" src = "img/putty_change_password_via_cmd.png">

Check for and install all system updates by executing `apt update && apt upgrade`:

<img alt = "PuTTY - Update System" src = "img/putty_update_system.png">

Remove any residue files by executing `apt autoclean && apt autoremove`:

<img alt = "PuTTY - Remove Residue Files" src = "img/putty_remove_residue_files.png">

#### Create a New User

No other command in this tutorial should be executed as `root` <sup>[(about)](https://en.wikipedia.org/wiki/Superuser)</sup> (besides the ones below to create a new user).

> **Note**: It's good practice to run your applications on a user level (as they were meant to) and leave administrative tasks to the `root` user. Your system is vulnerable to exploits and attacks when running applications as `root`, in consequence this can lead to files being deleted, breach of the `root` user's credentials, or complete loss of your system. For even more security (e.g. preventing [brute-force attacks](https://en.wikipedia.org/wiki/Brute-force_attack)), look into configuring [SSH key based secure authentication](https://www.ssh.com/ssh/key).

---

Create a new user and add it to the `sudo` <sup>[(about)](https://en.wikipedia.org/wiki/Sudo)</sup> group so you'll have administrative privileges:

- Create the user, replacing `example_user` with a username of your choice: `adduser example_user` (you'll be prompt to assign a password and enter information about the user)
- Add the user to the `sudo` group, replacing `example_user` with the username of the user you previously created: `adduser example_user sudo`
- Switch to the user, again by replacing `example_user`: `su example_user`

> **Note**: Log into your VPS with the credentials you previously created from here on out (add `sudo` to the beginning of a command if administrative privileges is required); although, you can always use the `su` command to switch to the user.

#### Install Dependencies

If you're using Ubuntu 18.04, use [Tasksel](https://help.ubuntu.com/community/Tasksel) to install a [LAMP Stack](https://en.wikipedia.org/wiki/LAMP_(software_bundle)) (*Linux, Apache, MySQL, PHP*):

`sudo tasksel install lamp-server`

**(Optional)** Otherwise, you can install **Apache** and **PHP** separately (or if you don't want **MySQL** to be installed altogether):
- Install Apache: `sudo apt install apache2`
- Install the base PHP package and the PHP Extension and Application Repository: `sudo apt install php php-pear`
- Add the PHP module for Apache: `sudo apt install libapache2-mod-php`

Any website you create should be placed in `/var/www/html`. You can access one of your websites at `http://IP/some-website` via a web browser, where `IP` is your VPS' IP address and `some-website` is the path to the website you wish to render.

#### Register a Domain & Configure Name-based Virtual Hosts

Your website (or at least the `Apache2 Ubuntu Default Page`) should be accessible at this point. It's recommended that you assign a domain to your website if you plan on having visitors from all around the world; however, it isn't technically necessary - your visitors would just have trouble remembering your VPS' IP address! If you do not wish to assign a domain to your website, skip to the [next step](#set-up-an-opskins-account).

---

There are many companies you can register a [Domain Name](https://en.wikipedia.org/wiki/Domain_name) with. [NameCheap](https://www.namecheap.com) & [GoDaddy](https://www.godaddy.com) are excellent domain name providers, and both have an active support team! Either one is highly recommended.

Before you go ahead and purchase a domain, decide whether you want an [SSL Certificate](https://en.wikipedia.org/wiki/Public_key_certificate) or not since purchasing one after you register a domain is often more expensive (you must pay the full price as no discount will be applied)! An SSL certificate will encrypt your visitors' information, thus improving the security of your website - it is recommended that you install one!

> **Note**: You aren't forced to pay for a domain as there are free options (such as [.tk](http://www.dot.tk)), but you are limiting the array of extensions available to you. It's important to note that some people tend to stay away from websites with free domains, so go with a paid domain if you're aiming for success!

After registering a domain of your choice, modify its [Host Records](https://en.wikipedia.org/wiki/Domain_Name_System), replacing `165.227.28.23` with your VPS' IP address:

* **Type**: A Record, **Host**: @, **Value**: 165.227.28.23, **TTL**: Automatic
* **Type**: A Record, **Host**: www, **Value**: 165.227.28.23, **TTL**: Automatic

> **Note**: **@** is a shortcut for the name defined as [*$ORIGIN*](http://www.zytrax.com/books/dns/ch8/origin.html) - basically your domain name which also represents the root directory. The second host record will accept requests with the **www** subdomain attached.

<img alt = "NameCheap - Modify Host Records" src = "img/namecheap_modify_host_records.png">

> **Note**: When a domain is newly registered, or DNS changes are made, you can expect a propagation time up to 24 hours.

---

#### If you didn't purchase an SSL certificate, click [here](#if-you-purchased-an-ssl-certificate-click-here-to-continue) to continue.

It's great that you have decided to install an SSL certificate to ensure that the information of your visitors is protected (such as passwords) - now you need to activate it! For that, you will need to generate a [CSR](https://en.wikipedia.org/wiki/Certificate_signing_request):

`openssl req -new -newkey rsa:2048 -nodes -keyout server.key -out server.csr` (you'll be prompt to enter information)

Once you have entered all of the requested information, you should have a `.csr` and `.key` file in the path where you executed the command - download the `.key` file as you'll need it later! Open the `.csr` file with `nano` (install it by executing `sudo apt install nano` if it doesn't come pre-installed), copy its content, then go to your provider's dashboard and start the process of activating your SSL certificate (you can find your SSL certificate listed under `Products` on NameCheap).

Enter what you copied from the `.csr` file:

<img alt = "NameCheap SSL - Enter CSR" src = "img/namecheap_ssl_enter_csr.png">

Confirm that the selected server is correct (it should include **Apache**):

<img alt = "NameCheap SSL - Confirm Server" src = "img/namecheap_ssl_confirm_server.png">

Select your preferred validation method:

<img alt = "NameCheap SSL - Validation Method" src = "img/namecheap_ssl_validation_method.png">

Go forward with the selected domain ownership validation process. At the end, typically two files in a compressed archive will be sent to you via email - download & extract it! With a [FTP Client](https://en.wikipedia.org/wiki/Comparison_of_FTP_client_software) ([FileZilla](https://filezilla-project.org) is highly recommended) connected through the `sftp` protocol (`sftp://IP`, where `IP` is your VPS' IP address - this is the value of `Host` on FileZilla), upload the files in the compressed archive (`.crt` & `.ca-bundle`) to `/etc/ssl/certs` and upload the `.key` file that was generated alongside the `.csr` file to `/etc/ssl/private`. See the following screenshots for reference:

<img alt = "FileZilla - Connect Reference" src = "img/filezilla_connect_reference.png">

<img alt = "FileZilla - Upload SSL Reference" src = "img/filezilla_upload_ssl_reference.png">

> **Note**: The `Username` and `Password` field on FileZilla correspond to your VPS log in credentials.

You will then need to enable **SSL Mode** so that Apache is able to run an encrypted [HTTPS](https://en.wikipedia.org/wiki/HTTPS) connection:

`sudo a2enmod ssl`

Moving forward, it's now time to configure the [Name-based Virtual Hosts](https://en.wikipedia.org/wiki/Virtual_hosting) so that your system knows what to do when someone visits your domain! For that:

* Disable the default Apache virtual host: `sudo a2dissite *default`
* Create the necessary folders for your website, replacing `example.com` with your domain name: `sudo mkdir -p /var/www/html/example.com/{includes,public_html}`
* Create the virtual host file for your website, replacing `example.com` with your domain name: `sudo nano /etc/apache2/sites-available/example.com.conf` (the text editor will prompt, follow the step of your choice below)
* Paste the following configuration, replacing `example.com` with your domain name, `example_com_key` with the name of your `.key` file, `example_com_crt` with the name of your `.crt` file, and `example_com_ca_bundle` with the name of your `.ca-bundle` file:

	```html
	<VirtualHost *:80>
		ServerName example.com
		ServerAlias www.example.com

		Redirect permanent / https://www.example.com/
	</VirtualHost>

	<VirtualHost *:443>
		ServerName example.com

		SSLEngine on
		SSLCertificateKeyFile /etc/ssl/private/example_com_key.key
		SSLCertificateFile /etc/ssl/certs/example_com_crt.crt
		SSLCACertificateFile /etc/ssl/certs/example_com_ca_bundle.ca-bundle

		Redirect permanent / https://www.example.com/
	</VirtualHost>

	<VirtualHost *:443>
		ServerName www.example.com

		SSLEngine on
		SSLCertificateKeyFile /etc/ssl/private/example_com_key.key
		SSLCertificateFile /etc/ssl/certs/example_com_crt.crt
		SSLCACertificateFile /etc/ssl/certs/example_com_ca_bundle.ca-bundle

		DirectoryIndex index.html index.php
		DocumentRoot /var/www/html/example.com/public_html
	</VirtualHost>
	```

* **(Optional)** The previous configuration will redirect requests to the root directory (`example.com`) to the `www` subdomain (`www.example.com`) while enforcing the `HTTPS` protocol. If you'd like the previous reversed (`www.example.com` redirects to `example.com`), paste the following instead (just remember to make the same replacements):

	```html
	<VirtualHost *:80>
		ServerName example.com
		ServerAlias www.example.com

		Redirect permanent / https://example.com/
	</VirtualHost>

	<VirtualHost *:443>
		ServerName www.example.com

		SSLEngine on
		SSLCertificateKeyFile /etc/ssl/private/example_com_key.key
		SSLCertificateFile /etc/ssl/certs/example_com_crt.crt
		SSLCACertificateFile /etc/ssl/certs/example_com_ca_bundle.ca-bundle

		Redirect permanent / https://example.com/
	</VirtualHost>

	<VirtualHost *:443>
		ServerName example.com

		SSLEngine on
		SSLCertificateKeyFile /etc/ssl/private/example_com_key.key
		SSLCertificateFile /etc/ssl/certs/example_com_crt.crt
		SSLCACertificateFile /etc/ssl/certs/example_com_ca_bundle.ca-bundle

		DirectoryIndex index.html index.php
		DocumentRoot /var/www/html/example.com/public_html
	</VirtualHost>
	```

* Save the changes to the virtual host configuration file by pressing `CTRL` + `X`, hitting `Y` for *Yes*, and then pressing `ENTER` to confirm.
* Enable your website by creating a symbolic link to your virtual host configuration file, replacing `example.com` with your domain name: `sudo a2ensite example.com.conf`

Finally, restart **Apache** for the changes to take effect:

`sudo systemctl restart apache2`

---

#### If you purchased an SSL certificate, click [here](#set-up-an-opskins-account) to continue.

Configure the [Name-based Virtual Hosts](https://en.wikipedia.org/wiki/Virtual_hosting) so that your system knows what to do when someone visits your domain! For that:

* Disable the default Apache virtual host: `sudo a2dissite *default`
* Create the necessary folders for your website, replacing `example.com` with your domain name: `sudo mkdir -p /var/www/html/example.com/{includes,public_html}`
* Create the virtual host file for your website, replacing `example.com` with your domain name: `sudo nano /etc/apache2/sites-available/example.com.conf` (the text editor will prompt, follow the step of your choice below)
* Paste the following configuration, replacing `example.com` with your domain name:

	```html
	<VirtualHost *:80>
		ServerName example.com

		Redirect permanent / http://www.example.com/
	</VirtualHost>

	<VirtualHost *:80>
		ServerName www.example.com

		DirectoryIndex index.html index.php
		DocumentRoot /var/www/html/example.com/public_html
	</VirtualHost>
	```

* **(Optional)** The previous configuration will redirect requests to the root directory (`example.com`) to the `www` subdomain (`www.example.com`). If you'd like the previous reversed (`www.example.com` redirects to `example.com`), paste the following instead (just remember to make the same replacement):

	```html
	<VirtualHost *:80>
		ServerName www.example.com

		Redirect permanent / http://example.com/
	</VirtualHost>

	<VirtualHost *:80>
		ServerName example.com

		DirectoryIndex index.html index.php
		DocumentRoot /var/www/html/example.com/public_html
	</VirtualHost>
	```

* Save the changes to the virtual host configuration file by pressing `CTRL` + `X`, hitting `Y` for *Yes*, and then pressing `ENTER` to confirm.
* Enable your website by creating a symbolic link to your virtual host configuration file, replacing `example.com` with your domain name: `sudo a2ensite example.com.conf`

Finally, restart **Apache** for the changes to take effect:

`sudo systemctl restart apache2`

## Set up an OPSkins Account

OPSkins is pretty much the main platform for all WAX services that require authentication, being interconnected through [WAX AllAccess](https://all-access.wax.io). You'll find yourself using OPSkins a lot, so it's recommended that you start by creating an account there!

### Create an Account

You can create an OPSkins account by [signing up with Facebook, Google, Steam, or Email](https://opskins.com/?loc=login&register):

<img alt = "WAX All Access - Sign Up" src = "img/wax_allaccess_sign_up.png">

### Enable 2FA (Two-Factor Authentication)

[2FA](https://en.wikipedia.org/wiki/Multi-factor_authentication) (*Two-Factor Authentication*) is required to request a WAX Creator API Key, use services such as WAX Trade, and more. You can activate 2FA with the help of your mobile device and the [Google Authenticator](https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2) app; however, it is recommended that you use a different app (this could also be an extension for your desktop browser, such as [Authenticator](https://chrome.google.com/webstore/detail/authenticator/bhghoamapcdpbohphigoooaddinpkbai?utm_source=chrome-ntp-icon) - highly recommended!) that shows your `secret` as you may need it at times.

> **Note**: Your 2FA `secret` isn't needed for this tutorial; however, it can come in handy at times it's required!

---

Go to your [OPSkins account security page](https://opskins.com/?loc=store_account#collapseSec) and hit the `Enable Two-Factor Authentication` button:

<img alt = "OPSkins - Enable 2FA Step 1" src = "img/opskins_enable_2fa_step_1.png">

A modal will prompt asking you to enter a one-time code that was sent to your email. Get the code and enter it:

<img alt = "OPSkins - Enable 2FA Step 2" src = "img/opskins_enable_2fa_step_2.png">

<img alt = "OPSkins - Enable 2FA Step 3" src = "img/opskins_enable_2fa_step_3.png">

After submitting the one-time code, another modal will prompt. On the Authenticator browser extension (or with the 2FA app/extension of your choice - instructions may vary), click on the `Scan QR Code` icon located on the top right corner, select the barcode with your cursor by holding down left click on your mouse, and then let go:

<img alt = "OPSkins - Enable 2FA Step 4" src = "img/opskins_enable_2fa_step_4.png">

<img alt = "OPSkins - Enable 2FA Step 5" src = "img/opskins_enable_2fa_step_5.png">

If the selection of the barcode was successful, a browser alert should prompt stating that your account has been added:

<img alt = "OPSkins - Enable 2FA Step 6" src = "img/opskins_enable_2fa_step_6.png">

> **Note**: You can alternatively add your account by entering the secret shown on the second modal on Authenticator, this can be done by clicking on the `Edit` icon - it's located on the top far right corner.

On Authenticator, click on the `Settings` icon located on the top left corner and hit `Sync Clock with Google`:

<img alt = "OPSkins - Enable 2FA Step 7" src = "img/opskins_enable_2fa_step_7.png">

<img alt = "OPSkins - Enable 2FA Step 8" src = "img/opskins_enable_2fa_step_8.png">

<img alt = "OPSkins - Enable 2FA Step 9" src = "img/opskins_enable_2fa_step_9.png">

> **Note**: This step is vital, the shown two-factor authentication code may be invalid otherwise.

Enter the current valid two-factor authentication code shown on Authenticator:

<img alt = "OPSkins - Enable 2FA Step 10" src = "img/opskins_enable_2fa_step_10.png">

After successfully enabling 2FA for your OPSkins account, you can now obtain your `secret` from the Authenticator extension! Click on the `Settings` icon, hit the `Export / Import` option, and then press the `Download Backup File` button:

<img alt = "OPSkins - Enable 2FA Step 7" src = "img/opskins_enable_2fa_step_7.png">

<img alt = "OPSkins - Enable 2FA Step 11" src = "img/opskins_enable_2fa_step_11.png">

<img alt = "OPSkins - Enable 2FA Step 12" src = "img/opskins_enable_2fa_step_12.png">

A `.json` file will begin to download. If you open it you'll see a similar multidimensional [JSON Array](https://www.w3schools.com/js/js_json_arrays.asp) as to the one below:

```json
{
	"3e44a51d4b5cad98c34f5f3658e35c73": {
		"account": "76569192284382175",
		"counter": 0,
		"encrypted": false,
		"hash": "3e44a51d4b5cad98c34f5f3658e35c73",
		"index": 0,
		"issuer": "OPSkins",
		"secret": "IUPQTTSIL5WIDUNS",
		"type": "totp"
	}
}
```

The only value you need from this `.json` file is `secret` (in case of the example above, that value is `IUPQTTSIL5WIDUNS`). Keep your secret in a safe place, and use it to restore your account or for development purposes such as programmatically generating 2FA codes (not required for this tutorial)!

**(Optional)** If you are unfamiliar with JSON arrays and have more than one account added to Authenticator, you'll see more entires as shown below:

```json
{
	"3e44a51d4b5cad98c34f5f3658e35c73": {
		"account": "76569192284382175",
		"counter": 0,
		"encrypted": false,
		"hash": "3e44a51d4b5cad98c34f5f3658e35c73",
		"index": 0,
		"issuer": "OPSkins",
		"secret": "IUPQTTSIL5WIDUNS",
		"type": "totp"
	},
	"313b6cb61386cb8f535cd74f2a5ea17c": {
		"account": "76561147468942173",
		"counter": 0,
		"encrypted": false,
		"hash": "313b6cb61386cb8f535cd74f2a5ea17c",
		"index": 0,
		"issuer": "OPSkins",
		"secret": "BVXFQ1S7YCDP71J4",
		"type": "totp"
	}
}
```

Simply find the right entry, make sure the `issuer` is `OPSkins`, and get your `secret` from the array.

## Request an API Key

A **WAX Creator API Key** is required to invoke the WAX Creator API, you should request one!

---

Go to your [WAX AllAccess account security page](https://all-access.wax.io/account/security) and make sure 2FA is enabled for your account:

<img alt = "WAX AllAccess - Make Sure 2FA Is Enabled" src = "img/wax_allaccess_make_sure_2fa_is_enabled.png">

[Log into the WAX Creator](https://creator.wax.io) with your WAX AllAccess account:

<img alt = "WAX Creator - Log In" src = "img/wax_creator_log_in.png">

Go to your [WAX Creator account page](https://creator.wax.io/user) and hit `ENABLE API KEY` to request a **WAX Creator API Key**:

<img alt = "WAX Creator - Request API Key Step 1" src = "img/wax_creator_request_api_key_step_1.png">

<img alt = "WAX Creator - Request API Key Step 2" src = "img/wax_creator_request_api_key_step_2.png">

Copy your **WAX Creator API Key** and keep it in hand as you'll need it later!

> **Warning!** If you give your WAX Creator API Key to anyone, they can invoke the WAX Creator API on your behalf without your consent.

> **Note**: If you ever lose your WAX Creator API Key or if you think it has been breached, you can always retrieve it or generate a new one on your [WAX Creator account page](https://creator.wax.io/user).

## Install Dependencies

As stated in the [Overview](#overview) at the beginning of this tutorial, the first extension under `Recommended` will be used; although, you are free to use any [other extension](#extensions)!

Download [Execute API Call](includes/execute_api_call.php) and place it inside your `includes` directory.

> **Note**: If you skipped the part of the tutorial where the `includes` folder was created, simply create the folder outside of your `public_html` directory. You should place any file that can be dynamically included from your `public_html` directory inside the `includes` folder.

> **Note**: If you are integrating the WAX Creator API directly into a production environment and you didn't install an SSL certificate, you will need an FTP client ([FileZilla](https://filezilla-project.org) is highly recommended) to upload files to your VPS (click [here](#if-you-didnt-purchase-an-ssl-certificate-click-here-to-continue) and read the part addressing the use of an FTP client if you're having trouble connecting). If your website is hosted with a dedicated web hosting provider, you can use their web-based FTP client instead.

Create a `.php` file, name it `index.php`, place it inside of your `public_html` directory, open the file with a text editor ([Sublime Text](https://www.sublimetext.com/3) is recommended) and include `execute_api_call.php` (or you can download the `index.php` file in this repository and simply place it inside of your `public_html` folder). Your `index.php` file should contain the following:

```php
<?php
	include_once "../includes/execute_api_call.php";
?>
```

> **Note**: The `index.html`/`index.php` file is the entry point of any website.

## Calling the API

Calling the WAX Creator API implies that you either send a [GET](https://www.w3schools.com/tags/ref_httpmethods.asp) or [POST](https://www.w3schools.com/tags/ref_httpmethods.asp) request to `https://api-icm.wax.io/api`, this will tell the server to perform an action on its end and return a response. The extension of choice handles all this for you.

> **Note**: Calls to `https://api-icm.wax.io/api` should always be executed over the `HTTPS` protocol; otherwise, your calls will be redirected and you will receive erroneous responses. `https://api-icm.wax.io/api` is the default value for the `url` parameter in the `ExecuteAPICall` function (loaded from the `execute_api_call.php` file).

---

All [endpoints](https://github.com/worldwide-asset-exchange/wax-creator) of the WAX Creator API can be called using the same base structure. For instance, the [create](https://github.com/worldwide-asset-exchange/wax-item-creation-management/blob/master/IItemSubmission/create.md) endpoint can be called as followed:

```php
<?php
	include_once "../includes/execute_api_call.php"; // include the extension used to invoke the WAX Creator API

	$response = ExecuteAPICall("POST", "IItemSubmission/create", array( // method, endpoint, data (optional), url (optional - used to call any other API besides the WAX Creator API)
		"api_token" => "Your WAX Creator API Key", // your WAX Creator API Key
		"internal_app_id" => 12, // WAX App ID: 12 for WAX Stickers, 14 for WAX Digital Art, or 32 for WAX Collectible Cards
		"name" => "WAX Creator API", // item name (simpler/shorter version of `market_name`)
		"market_name" => "Sticker | WAX Creator API", // full market name (must be unique per `internal_app_id`)
		"image_generic" => "https://static.wax.io/d-img/dynamic-apps/img/php5cfizh-9137032131.png", // item image url (must be a `static.wax.io` URL)
		"amount" => 1, // number of items to be generated (copies)
		"color" => "#FFD700", // color hex (#AA0000), related with rarity
		"rarity_name" => "Legendary", // rarity name (Legendary, Rare, etc).
		"collection_name" => "WAX Creator API", // name of the collection this item belongs to
		"json_attributes" => '{"markdown_description": "WAX Creator API"}' // description of the item
	));

	if($response != NULL) // check if the WAX Creator API responded (it may be offline or under maintenance)
	{
		$response_data = json_decode($response, true); // return an array to easily process the response

		echo "success: " . (($response_data['success']) ? ("true") : ("false")) . "<br><br>"; // example on how to access data in the array

		var_dump($response_data); // output the response for debugging purposes
	}
	else
	{
		echo "The WAX Creator API didn't respond, it may be offline or under maintenance. Please try again later."; // output a message on the user's browser
	}
?>
```

<img alt = "Create Endpoint - Response" src = "img/create_endpoint_response.png">

<img alt = "Create Endpoint - Outcome" src = "img/create_endpoint_outcome.png">

As you can see in the screenshots above, the request was successfully received by the WAX Creator API and the collectible has been submitted by verifying on the [WAX Creator](https://creator.wax.io/my-collectibles)!

> **Note**: Your `WAX Creator API key` should be passed as `api_token` (as shown above).

> **Note**: You can view all the parameters the `create` endpoint supports by clicking [here](https://github.com/worldwide-asset-exchange/wax-item-creation-management/blob/master/IItemSubmission/create.md). Documentation for all other endpoints can be found on the same repository. 

The `data` parameter in the `ExecuteAPICall` function should be structured differently when sending requests to endpoints that use the `GET` method:

```php
<?php
	include_once "../includes/execute_api_call.php"; // include the extension used to invoke the WAX Creator API

	$response = ExecuteAPICall("GET", "IItemSubmission/read", "api_token=Your WAX Creator API Key&submission_id=6758"); // api_token - your WAX Creator API Key, submission_id - ID of the submission to retrieve info of | method, endpoint, data (optional), url (optional - used to call any other API besides the WAX Creator API

	if($response != NULL) // check if the WAX Creator API responded (it may be offline or under maintenance)
	{
		$response_data = json_decode($response, true); // return an array to easily process the response

		echo "success: " . (($response_data['success']) ? ("true") : ("false")) . "<br><br>"; // example on how to access data in the array

		var_dump($response_data); // output the response for debugging purposes
	}
	else
	{
		echo "The WAX Creator API didn't respond, it may be offline or under maintenance. Please try again later."; // output a message on the user's browser
	}
?>
```

<img alt = "Read Endpoint - Response" src = "img/read_endpoint_response.png">

As you can see in the screenshot above, the request was successfully received by the WAX Creator API and information of the previously submitted collectible was returned!

> **Note**: An **&** separates each parameter when using the `GET` method (you may have seen this in an URL of a website).

When you receive an error, it may typically look like this:

```json
{
	"success": false,
	"error":" The amount must be an integer."
}
```

See the [API Documentation for the WAX Creator](https://github.com/worldwide-asset-exchange/wax-creator) to view all the other interfaces/endpoints you can call in the same manner as the `create` & `read` endpoint (as shown above).

# Node.js

## Beginners

### Local Environment

### Production Environment

#### Order/Create a VPS

#### Log In & Prepare Your VPS

#### Create a New User

#### Install Dependencies

#### Register a Domain & Configure Name-based Virtual Hosts

## Set up an OPSkins Account

### Create an Account

### Enable 2FA (Two-Factor Authentication)

## Request an API Key

## Install Dependencies

## Calling the API

# Related APIs

If you are building a dApp, a website or a game using the WAX Creator, you can make use of other WAX services to power up your application:

- [OAuth Implementation](https://docs.opskins.com/public/en.html#oauth) - Allows you to add a 'Login via WAX' button in your application and interact with the user's account using WAX Trade and OPSkins APIs.
- [WAX Trade API](https://github.com/OPSkins/trade-opskins-api) - May be used to retrieve a user's inventory, manage trade offers, see meta-data of WAX NFTs, and much more.
- [OPSkins API](https://docs.opskins.com/public/en.html#opskins-api-v2) - May be used to purchase or sell items on OPSkins, check lowest prices of items, handle cashouts, and much more.