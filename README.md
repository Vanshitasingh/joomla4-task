# P2 Guided Tour - Evaluation task 
A headings plugin that concatenates your text with your site's heading.

## Installation:
<ol>
  <li> Download the zip file </li>
  <li> Visit Joomla Administration Panel of your website </li>
  <li> Go to the plugin installation page (Found under system settings) </li>
  <li> Upload the zip file </li>
</ol>

## Plugin Specifications:
- Type: <b> System </b> <br/>
- Events Used: <b> onBeforeCompileHead </b>
- Follows Joomla Coding Standards: <b> Yes </b> <br/>
- Follows Joomla Naming Conventions: <b> Yes </b> <br/>
- phpcs sniffer verified: <b> Yes </b> <br/>

## Plugin Folder Structure

    ├── language
    │   └── en-GB.plg_system_vsheadings.ini
    └── vsheadings.php
    └── vsheadings.xml


## Expected Output/Behaviour:
### 1. Entering the desired text into the input field

Note: Page is being reloaded in the gif

![Entering Text](https://i.ibb.co/2ZswBLY/part1.gif)

Here, I have enetered my name 'Vanshita' and saved the changes.

### 2. Enabling the plugin

Note: Page is being reloaded in the gif

![Displayed view](https://i.ibb.co/9pshhM3/part2.gif)

After enabling the plugin, your text input will be attached to all the headings present on the site.
