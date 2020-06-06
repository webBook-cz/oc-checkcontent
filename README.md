# oc-checkcontent
Check if content file exists

October CMS
#Usage:
Prevent error log if choosing non-existing content file (and use :slug instead of content file name)

twig for content file
```
{% if content_exists( this.param.slug ~ '.htm') %}
    {% content this.param.slug %}
{% else %}
    {% content 'default' %}
{% endif %}
```
Check if media file is present in the media folder

twig for media file
```
{% set img = 'gallery/' ~ 'image.png' %}

{% if media_exists( img ) %}
    <img src="{{ img|media }}" alt="">
{% else %}
    <p>no image found</p>
{% endif %}
```