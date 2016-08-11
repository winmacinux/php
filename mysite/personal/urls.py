from django.conf.urls import url, include
from django.views.generic import ListView, DetailView
form personal.models import user
from . import views

urlpatterns = [
    url(r'^$', views.index, name='index'),
    url(r'^data_entry/$', views.data_entry, name='data_entry'),
    url(r'^$', Listview.as_view(queryset=user.objects.all(), template_name="personal/users.html"))
]
