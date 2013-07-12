from django.conf.urls import patterns, include, url
from django.contrib import admin
admin.autodiscover()
from event import views

urlpatterns = patterns('',
    url(r'^create/$', views.addevent), #to create a new event 
    url(r'^$', views.index), #opens the default event page
)
