# Under - A dark theme for MantisBT

![MantisBTDarkTheme Screenshot](files/Under_Screenshot_MyView.png)

## About

This plugin skins the WebUI of MantisBT with a dark theme. The plugin replaces the CSS classes. It is based on the fine work by [Tagirijus](www.github.com/Tagirijus/MantisBTDarkTheme), but skins a few more screens. Sadly, I don't know how to change the colors of the graphs in 'Summary'.

## Installation

Upload the whole folder into your `plugins/` folder in the mantis installation so that you e.g. have `MANTIS_INSTALLATION/plugins/Under/Under.php`. Make sure that MantisBT has proper access rights to the plugin directory. After that the plugin should show up on the `manage_plugin_page.php` page in the mantis settings. There you can simply install it to activate it.

I've set the status colors to get the skin to look as the screenshots. Go to 'Manage'->'Manage Configuration'->'Configuration Report'. Hit  'Create Configuration Option', and fill in:
* Configuration Option : 'status_colors'
* Value : 'array ( 'new' => '#ff9800', 'feedback' => '#673ab7', 'acknowledged' => '#ff5722', 'confirmed' => '#e91e63', 'assigned' => '#2196f3',  'resolved' => '#bbdc39', 'closed' => '#4caf50', )'

## Customize colors

I did not test it, but in theory you should even be able to *skin* it all with your own colors. The file `Under.sass` has some variables defined at the beginning which define its colors. Feel free to adjust and experiment the SASS file. Compile the SASS into CSS (which turns out, is really quite easy with the free compilers out there - Koala worked excellent for me).

## Screenshots
![MantisBTDarkTheme Screenshot](files/Under_Screenshot_Roadmap.png)
![MantisBTDarkTheme Screenshot](files/Under_Screenshot_Summary.png)
