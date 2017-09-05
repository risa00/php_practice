
class Human:
    fname = 'りさ'
    lname = 'あおき'
    age = 23
    btype = 'A'
    weight = 45.0 #kg
    height = 1.54 #m
    def get_bmi(self):
        return self.weight / (self.height ** 2)
        #**2は二乗　selfは慣例

#クラス名()でオブジェクトを生成
#humanクラスがつくられる
human = Human()
print(human.lname)
print(human.get_bmi())

human2 = Human()
human2.lname = 'やまの'
human2.btype = 'B'
print(human2.lname)
print(human2.btype)
