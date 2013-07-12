from django.conf.urls import patterns, include, url
from django.contrib import admin
from contact import views
admin.autodiscover()

urlpatterns = patterns('',
    url(r'^$', views.index),
    url(r'^home/$', views.index),
    url(r'^about/$',views.about),
    url(r'^login/$',views.Login),
    url(r'^logout/$',views.Logout),
    url(r'^event/', include('event.urls')), #the url paterns for /event/* 
    url(r'^user/', include('contact.urls')), # url paterns for /user/* to contact.urls to maintain userprofile
    url(r'^admin/', include(admin.site.urls)),# temprorary admin interface to be changed to xadmin
)
