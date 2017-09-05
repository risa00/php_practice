#組み込み関数
'''
len関数　引数一つ
長さを計測したいデータを引数に指定する
文字列→文字数、配列→要素数が戻り値
データの型にあった長さを計測して返す
'''
len('Python')
len('[1,2,3,4,5]')

'''
pow関数　引数複数設定できる
乗算
'''
pow(2,3)

min([1,2,3])
max([1,2,3])

#import文
'''
importを使うことで、色んなpythonプログラムを使うことができる
関数を別ファイルで作るときはimportすれば使える
以下はplatformというモジュールのsystem関数を使っている　OSを判定するプログラム
'''
import platform
print(platform.system())

#自己定義関数 defとreturn
def max(a,b):
    if a > b:
        return a
    return b

def compare_string(a,b):
    if len(a) > len(b):
        return a
    return b
print(compare_string('aaa', 'bbbb'))

#数字の配列を引数にとって、偶数のみの合計を返す
def calc_max(array):
    result = 0
    for v in array:
        if v % 2 == 0:
            #result += v
            result = result + v
    return result

print(calc_max([1,2,3,4,5]))
