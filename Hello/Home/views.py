import email
from email import message
from django.http import HttpResponse
from django.shortcuts import render
from datetime import datetime
from Home.models import Contact
from django.contrib import messages

# Create your views here.


def index(request):
    # return HttpResponse("This is my Home Page")
    # messages.success(request, "This is test Message")
    return render(request,"index.html")

def about(request):
    # return HttpResponse("This is my Home Page")
    return render(request,"about.html")

def services(request):
    # return HttpResponse("This is my Home Page")
    return render(request,"services.html")

def contact(request):
    # return HttpResponse("This is my Home Page")

    if request.method == "POST":
        name = request.POST.get('name')
        email = request.POST.get('email')
        phone = request.POST.get('phone')
        query = request.POST.get('query')
        

        # Get The Data
        contact = Contact(name=name,email=email,phone=phone,query=query,date=datetime.today())
        contact.save()
        messages.success(request, 'Your Form Has Been Submitted Successfully!')

       

    return render(request,"contact.html")