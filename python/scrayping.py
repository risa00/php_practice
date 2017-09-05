#urllibというhttp通信を行うライブラリを取り込んで、webページの解析を行うライブラリbeautifulsoupをインポートする
import urllib.request
from bs4 import BeautifulSoup

#urllibでアクセスしたwebページに関する情報をbeautifulsoupに渡す
req = urllib.request.urlopen('http://quality-start.in/company/')

#セレクタを指定して（今回はh1）中身の文字を取得する
soup = BeautifulSoup(req, "html.parser")
print(soup.find('h1').text)
#find_allですべて選択、指定しないと最初のみ
print(soup.find_all('a')[1]) #タグ付き
print(soup.find_all('a')[1].text) #テキストのみ

for elem in soup.find_all('a'):
    print(elem.text)

#class_にしているのは予約語のため
#divタグのクラス'list-group'を取得
for elem in soup.find_all('div',class_= 'list-group'):
    print(elem.text)
