=== Spotify Embed ===
Contributors: ocean90
Tags: Spotify, WP Embed, embed, music
Requires at least: 3.3
Tested up to: 3.4-alpha
Stable tag: 0.1

Easily embed Spotify playlists, albums and tracks into your posts.

== Description ==

Just place a Spotify link into your posts and the plugin will insert the Spotify Play Button for you. Very easy.

The plugin based on the new announced API, see the [offical site here](https://developer.spotify.com/technologies/spotify-play-button/).

= Usage examples =

Track embed:
`http://open.spotify.com/track/4IJUii1lg0IRLBs0yG1w2p`

Album embed:
`http://open.spotify.com/album/4pT0rlFvHYc46KyEhmCy88`

Playlist embed:
`http://open.spotify.com/user/sonymusic/playlist/1BVPSd4dynzdlIWehjvkPj`

= Coming soon =
* Support for Spotify URLs like `spotify:album:4pT0rlFvHYc46KyEhmCy88`.

**Sounds pretty good? Install now!**

= Feedback = 
If you want, you can drop me a line @[ocean90](http://twitter.com/ocean90) on Twitter or @[Dominik Schilling](https://plus.google.com/u/0/101675293278434581718/) on Google+.

= More =
Try also some of my [other plugins](http://profiles.wordpress.org/users/ocean90) or visit my site [wpGrafie.de](http://wpgrafie.de/).

== Frequently Asked Questions ==

= Can I embed the light theme instead of the dark theme? =
Yes, you can. Just wrap your link into the `[embed][/embed]` shortcode and add the keyword 'light'.
Example:
`[embed light]http://open.spotify.com/user/spotify/playlist/3Yrvm5lBgnhzTYTXx2l55x[/embed]`

= I want to show the cover art, is that possible? =
Yes. Just wrap your link into the `[embed][/embed]` shortcode and add the keyword 'coverart'.
Example:
`[embed coverart]http://open.spotify.com/user/spotify/playlist/3Yrvm5lBgnhzTYTXx2l55x[/embed]`

= Can I customize the size of the embed box? =
Yes. Just wrap your link into the `[embed][/embed]` shortcode and add the keywords 'height' and/or 'width'.
(Note: Take alsoa look at the [Spotify documentation](https://developer.spotify.com/technologies/spotify-play-button/documentation/))
Example:
`[embed height="600" width="450"]http://open.spotify.com/user/spotify/playlist/3Yrvm5lBgnhzTYTXx2l55x[/embed]`

= Can I combine all these keywords? =
Yes.

== Screenshots ==

1. How it will look.

== Installation ==

Note: There will be NO settings page.

For an automatic installation through WordPress:

1. Go to the 'Add New' plugins screen in your WordPress admin area
1. Search for 'Spotify Embed'
1. Click 'Install Now' and activate the plugin


For a manual installation via FTP:

1. Upload the `spotify-embed` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' screen in your WordPress admin area


To upload the plugin through WordPress, instead of FTP:

1. Upload the downloaded zip file on the 'Add New' plugins screen (see the 'Upload' tab) in your WordPress admin area and activate.

== Changelog ==
= 0.1.0 =
* First release.

