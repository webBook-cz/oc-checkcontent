# oc-checkcontent
Check if content file exists

October CMS
#Usage:
Prevent error log if choosing non-existing content file (and use :slug instead of content file name)

```twig
{% if content_exists( this.param.slug ~ '.htm') %}
    {% content this.param.slug %}
{% else %}
    {% content 'default' %}
{% endif %}
```
