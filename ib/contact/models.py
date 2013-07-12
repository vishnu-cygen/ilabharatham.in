from django.db import models
from django.contrib.auth.models import User

class Uprofile(models.Model):
        user            = models.OneToOneField(User)
        name            = models.CharField(max_length=100)
        bloodgroup      = models.CharField(max_length=5)
        addressl1       =models.CharField(max_length=50, null=True, blank=True)
        addressl2       =models.CharField(max_length=50, null=True, blank=True)
        addressl3       =models.CharField(max_length=50, null=True, blank=True)
        City            =models.CharField(max_length=50, null=True, blank=True)

        def __unicode__(self):
                return self.name

