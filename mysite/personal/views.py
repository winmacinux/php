from django.shortcuts import render

def index(request):
    return render(request, 'personal/index.html')

def data_entry(request):
    return render(request, 'personal/data_entry.html')
