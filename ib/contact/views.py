from django.template import Context, loader, RequestContext
from django.shortcuts import get_object_or_404, render ,render_to_response
from django.http import HttpResponseRedirect, HttpResponse
from django.core.urlresolvers import reverse
from contact.forms import EventForm , LoginForm
from django.contrib.auth import authenticate,login,logout
from django.contrib.auth.models import User



def index(request):
    return render_to_response('index.html', {}, context_instance=RequestContext(request))

def about(request):
    return render_to_response('about.html', {}, context_instance=RequestContext(request))

def Logout(request):
        logout(request)
        return HttpResponseRedirect('/')

def Login(request):
    if request.user.is_authenticated():
        return HttpResponseRedirect('/')
    if request.method == 'POST':
        form = LoginForm(request.POST)
        if form.is_valid():
            username = form.cleaned_data['username']
            password = form.cleaned_data['password']
            user = authenticate(username=username, password=password)
            if user is not None:
                login(request, user)
                return HttpResponseRedirect('/')
            else:
                return render_to_response('login.html', {'form': form}, context_instance=RequestContext(request))
        else:
            return render_to_response('login.html', {'form': form}, context_instance=RequestContext(request))
    else:
        form = LoginForm()
        return render_to_response('login.html', {'form': form}, context_instance=RequestContext(request))

        