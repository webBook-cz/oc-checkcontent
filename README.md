# oc-checkcontent
Check if content/media file exists

October CMS
#Usage:

## Content file
Prevent error log if choosing non-existing content file (and use :slug instead of content file name)

```twig
{% if content_exists( this.param.slug ~ '.htm') %}
    {% content this.param.slug %}
{% else %}
    {% content 'default' %}
{% endif %}
```
## Partial file

```twig
{% if partial_exists( this.param.slug ~ '.htm') %}
    {% partial this.param.slug %}
{% else %}
    {% partial 'default' %}
{% endif %}
```
## Media file
Check if media file is present in the media folder

```twig
{% set img = 'gallery/' ~ 'image.png' %}

{% if media_exists( img ) %}
    <img src="{{ img|media }}" alt="">
{% else %}
    <p>no image found</p>
{% endif %}
```
