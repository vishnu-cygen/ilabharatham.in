from django.contrib.auth.models import User
from django import forms

class EventForm(forms.Form):
    title = forms.CharField(max_length=100)
    data = forms.CharField(max_length=2000)
    date = forms.DateInput()
    image = forms.ImageField()

class LoginForm(forms.Form):
        username        = forms.CharField(label=(u'User Name'))
        password        = forms.CharField(label=(u'Password'), widget=forms.PasswordInput(render_value=False))