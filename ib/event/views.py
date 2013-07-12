from django.template import Context, loader, RequestContext
from django.shortcuts import get_object_or_404, render ,render_to_response
from django.http import HttpResponseRedirect, HttpResponse
from django.core.urlresolvers import reverse
from event.models import EventibForm

def index(request):
    return render_to_response('event.html', {}, context_instance=RequestContext(request))

def addevent(request):
    if request.method == 'POST':
        form = EventibForm(request.POST)
        if form.is_valid():
            form.save()
            return render_to_response('eventcreate.html',{'form': form},context_instance=RequestContext(request))
        else:
            form = EventibForm()
    else:
        form = EventibForm()
        return render_to_response('eventcreate.html',{'form': form} ,context_instance=RequestContext(request))