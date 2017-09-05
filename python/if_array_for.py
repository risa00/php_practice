'''
字下げは何文字でもOK
コロンが来たら必ず字下げ
'''

#if文
if 3 > 1:
    print('hello, Python')

your_size = 36
if your_size <= 15:
    print('S')
elif your_size < 30:
    print('M')
else:
    print('L')

#for文 繰り返し　配列の一つ一つの値が変数Vに順に入る
array = [1,2,3]
for v in array:
    print(v)

#breakとcontinue
#処理を止める
array = [1,2,3,4,5]
for v in array:
    if (v == 3):
        break
    print(v, end = ' ')

print('')

#スキップして続行する
array = [1,2,3,4,5]
for v in array:
    if (v == 3):
        continue
    print(v, end = ' ')
