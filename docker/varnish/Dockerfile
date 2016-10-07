FROM million12/varnish
COPY default.vcl /etc/varnish/default.vcl
ENV VARNISHD_PARAMS -p default_ttl=3600 -p default_grace=3600 -T 127.0.0.1:6082 -S /etc/varnish/secret