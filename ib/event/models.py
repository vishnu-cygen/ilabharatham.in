from django.db import models
from django.forms import ModelForm
from contact.models import Uprofile
from django.contrib.auth.models import User
import datetime

class Eventib(models.Model):
    title = models.CharField(max_length=50)
    data = models.CharField(max_length=2000)
    location = models.CharField(max_length=200)
    date = models.DateField(null= True, blank=True)
    createdon = models.DateTimeField(auto_now_add=True)
    createdby = models.ForeignKey(User)
    attendees = models.ManyToManyField(Uprofile, null=True, blank=True)
    updated = models.DateTimeField(auto_now=True)
    image = models.ImageField(upload_to="images/event/", help_text="50x180px image", default="images/event/1.jpg")
    def __unicode__(self):
        return self.title

class EventibForm(ModelForm):
    class Meta:
        model = Eventib