import email
from django.db import models

# Create your models here.


class Contact(models.Model):
    name = models.CharField(max_length=50)
    email = models.CharField(max_length=50)
    phone = models.CharField(max_length=50)
    query = models.TextField(max_length=50)
    date = models.DateField()
    

     # TO Show The User Name in DB

    def __str__(self):
        return self.name
