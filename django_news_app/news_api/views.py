from django.http import HttpResponse
from django.shortcuts import render
import requests
API_KEY = '2852c518961c44ab90fe0afaebdd677b'


# Create your views here.


# def home(request):
#    return HttpResponse("Hello Tejas")
# def home(request):
#     country = request.GET.get('country')
#     category = request.GET.get('category')

#     if country:
#         # url = f'https://newsapi.org/v2/top-headlines?country={country}&apiKey={API_KEY}'
#         url = f'https://newsapi.org/v2/top-headlines?country={country}&apiKey={API_KEY}'
#         response = requests.get(url)
#         data = response.json()
#         articles = data['articles']
#     else:
#         url = f'https://newsapi.org/v2/top-headlines?category={category}&apiKey={API_KEY}'
#         response = requests.get(url)
#         data = response.json()
#         articles = data['articles']



#     context = {
#         'articles' : articles
#     }

#     return render(request, 'news_api/home.html', context)


def tejas(request):
    # return HttpResponse("Hello Tejas")
    country = request.GET.get('country')
    category = request.GET.get('category')

    if country:
        # url = f'https://newsapi.org/v2/top-headlines?country={country}&apiKey={API_KEY}'
        url = f'https://newsapi.org/v2/top-headlines?country={country}&apiKey={API_KEY}'
        response = requests.get(url)
        data = response.json()
        articles = data['articles']
    else:
        url = f'https://newsapi.org/v2/top-headlines?category={category}&apiKey={API_KEY}'
        response = requests.get(url)
        data = response.json()
        articles = data['articles']



    context = {
        'articles' : articles
    }
    return render(request, "news_api/tejas.html", context)
