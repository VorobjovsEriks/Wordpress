Used VCCW for wordpress development : http://vccw.cc/

## Configuration

Should work if you simply copy theme files.

DB will be created and populated on theme switch : functions.php table_create()

Custom blocks will load by default if "Homepage settings > homepage and posts page"
will not be selected i.e.
"--Select--"

OR

1. Copy `provision/default.yml` to `site.yml`.
1. Edit the `site.yml`.
1. Run `vagrant up`.

## Site configuration
1. url should be http://mediapark.development
2. theme to use "twentytwentyone-child"
   (created a child not new theme, as i thought this would be faster)
3. Needed plugin : "Genesis Custom Blocks"
4. in "Custom blocks" create "form", "News", "slider", "Table",
    no additional fields are needed there, as I couldn't export these custom blocks,
    i hardcoded all customisable data.
5. add all "Custom blocks" in main page.

You can run gulp watch from '/wp-content/themes/twentytwentyone-child'
