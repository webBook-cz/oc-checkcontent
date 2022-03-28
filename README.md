# oc-checkcontent
Check if content/media file exists

October CMS
#Usage:

## Content file
Prevent error log if choosing non-existing content file (and use :slug instead of content file name)

```twig
{% if contentExists( this.param.slug ~ '.htm') %}
    {% content this.param.slug %}
{% else %}
    {% content 'default' %}
{% endif %}
```
## Partial file

```twig
{% if partialExists( this.param.slug ~ '.htm') %}
    {% content this.param.slug %}
{% else %}
    {% content 'default' %}
{% endif %}
```
## Media file
Check if media file is present in the media folder

```twig
{% set img = 'gallery/' ~ 'image.png' %}

{% if mediaExists( img ) %}
    <img src="{{ img|media }}" alt="">
{% else %}
    <p>no image found</p>
{% endif %}
```
