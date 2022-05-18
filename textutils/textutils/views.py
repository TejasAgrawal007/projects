# I have Created This File - Tejas

from django.http import HttpResponse
from django.shortcuts import render


def index(request):
    return render(request, 'index.html')
    # return HttpResponse("Home")


def analyze(request):
    # Get The Text
    djText = request.GET.get('text', 'default')

    # Check checkBox Value
    removepunc = request.GET.get('removepunc', 'off')
    fullcaps = request.GET.get('fullcaps', 'off')
    newLineRemover = request.GET.get('newLineRemover', 'off')
    extraspaceRemover = request.GET.get('extraspaceRemover', 'off')

    # check with checkbox is on
    if removepunc == "on":
        punctuation = ''':()-[]{};"'\,<>./?@$^&*_~"'''

        analyze = ""
        for char in djText:
            if char not in punctuation:
                analyze = analyze + char

        params = {'purpose': 'Removed Punctations', 'analyze_text': analyze}

        # Analyze The Text
        return render(request, 'analyze.html', params)

    elif(fullcaps == "on"):
        analyze = ""
        for char in djText:
            analyze = analyze + char.upper()

        params = {'purpose': 'Change to Upper Case', 'analyze_text': analyze}

        # Analyze The Text
        return render(request, 'analyze.html', params)

    elif(newLineRemover == "on"):
        analyze = ""
        for char in djText:
            if char != "\n":
                analyze = analyze + char

        params = {'purpose': 'Remove New Line', 'analyze_text': analyze}

        # Analyze The Text
        return render(request, 'analyze.html', params)

    elif(extraspaceRemover == "on"):
        analyze = ""
        for index, char in enumerate(djText):
            if djText[index] =="" and djText[index+ 1] == " ":
               pass
            else:
                analyze = analyze + char

        params = {'purpose': 'Remove Extra Space', 'analyze_text': analyze}

        # Analyze The Text
        return render(request, 'analyze.html', params)



    else:
        return HttpResponse("Error")
