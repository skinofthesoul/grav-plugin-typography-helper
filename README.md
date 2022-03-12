# Typography Helper Plugin

The **Typography Helper** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav), more specifically for the [Admin plugin](https://github.com/getgrav/grav-plugin-admin). It adds a selection of special characters to Markdown fields in Admin, and highlights non-breakable spaces and double spaces.

## Installation

Installing the Typography Helper plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install typography-helper

This will install the Typography Helper plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/typography-helper`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `typography-helper`. You can find these files on [GitHub](https://github.com/skinofthesoul/grav-plugin-typography-helper) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/typography-helper
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/skinofthesoul/grav-plugin-typography-helper/blob/master/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/typography-helper/typography-helper.yaml` to `user/config/plugins/typography-helper.yaml` and only edit that copy, or even better, edit the configuration in Admin which will do this for you.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
default:
  ­: 'weiches Trennzeichen'
  „: 'öffnendes Anführungszeichen'
  “: 'schließendes Anführungszeichen'
  "\_": 'klebendes Leerzeichen'
  –: Gedankenstrich
  ’: Apostroph
  …: 'horizontale Ellipse'
```

These are the extra characters that I usually need for my German websites. You can theoretically put in whatever characters you need (and give them helpful labels), but please note that some characters may break something or make the editor behave oddly. If you come across something like that, please file an issue!

## Usage

If you have a list of characters set in the plugin configuration, they will show up as clickable buttons in a bar underneath any editor field in Admin. Just place your cursor where you want a character to be inserted and click whichever you need. The highlighting for trailing spaces and no-break spaces happens automatically, if you need other things hightlighted please let me know in the issue queue!

## Credits

I incorporated the trailingspace addon from the official CodeMirror addons, and I could not possibly have done this without the most helpful answers from Djamil Legato in my [Admin issue](https://github.com/getgrav/grav-plugin-admin/issues/1925).

