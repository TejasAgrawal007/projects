import PyPDF2

a = PyPDF2.PdfFileReader('basic.pdf')
str = ""
for  i in range(4,5):
    str += a.getPage(i).extractText()


with open('text.txt', "w") as f:
    f.write(str)
