# a = input("Введите первый цвет\n")
# b = input("Введите второй цвет\n")
#
#
# if a == "красный" and b == "синий" or b == "красный" and a == "синий":
#     print('у нас получился фиолетовый цвет')
# elif a == "красный" and b == "желтый" or b == "красный" and a == "желтый":
#     print('у нас получился оранжевый цвет')
# elif a == "синий" and b == "желтый" or b == "синий" and a == "желтый":
#     print('у нас получился зеленый цвет')
# elif a ==  b and (a == "красный" or a == "желтый" or a == "синий"):
#     print(a)
# else:
#     print("ошибка цвета")
#
#
#определение интересное число либо нет.
#если разность двух крайних цифр в трехзначном числе равна средней цифре то число интересное , иначе нет.

a = input("Введите трехзначное число\n")
list_arc = [a]

for b in list_arc:
    q = (int(list_arc[0][0]))
    w = (int(list_arc[0][1]))
    e = (int(list_arc[0][2]))

    t = abs(q-e)

    if ('t' in globals()):
        if (int(w) == t):
            print("Число интересное")
        else:
            print("Число не интересное")
    else:
        print("Первая и последняя цифра равны!")
