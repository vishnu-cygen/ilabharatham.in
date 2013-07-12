from django.conf.urls import patterns, include, url
from django.contrib import admin
admin.autodiscover()
from contact import views

urlpatterns = patterns('',
    url(r'^$', views.index),
)