from django.db import models

class user(models.Model):
    name = models.CharField(max_length=20)
    email = models.CharField(max_length=20)
    password = models.CharField(max_length=20)
    admin_rights = models.CharField(max_length=4)

    def __str__(self):
        return self.email
