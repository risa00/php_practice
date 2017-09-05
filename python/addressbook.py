'''
リストオブジェクト.append(オブジェクト)
list = ["A", "B", "C"]
list.append("D")
print list     # ["A", "B", "C", "D"]
'''


#新たに個人をアドレス帳に登録する
class AddressBook:
    person_list = []
#person_list(個人一覧)にperson(個人)をappend
#(最後に追加)する
    def add(self,person):
        self.person_list.append(person)
#個人一覧をfor文で繰り返す
#pに代入される
    def list_all(self):
        for p in self.person_list:
            print(p.lname + " " + p.fname)
#serch関数の実装 ｋはキーワード
#in 右側の文字列にkが入っているか確認する
    def serch(self, k):
        for p in self.person_list:
            if k in p.fname or k in p.lname:
            print(p.lname + " " + p.fname)

class Person:
    fname = ''
    lname = ''
    tel = ''
#    import datetime
#    bday = datetime.date()

abook = AddressBook()
aoki = person()
aoki.fname = 'りさ'
aoki.lname = 'あおき'
abook.add(aoki)

yamano = person()
yamano.fname = 'まさひこ'
yamano.lname = 'やまの'
abook.add(yamano)

abook.list_all()
abook.search('たかはし')
abook.search('やまの')
