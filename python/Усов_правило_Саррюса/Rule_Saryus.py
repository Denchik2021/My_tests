import math
import random
import numpy as np

num = int(input("Введите число (где 1 это магия :-) | 0 - решаем по обычному "))


def r_fun(a_num=-100, b_num=100):
    list_arr = []
    for a in range(a_num, b_num, 1):
        list_arr.append(a)
    rand_num = (random.sample(list_arr, 9))
    return rand_num


def func_chunks_num(rand_num, c_num=3):
    n = math.ceil(len(rand_num) / c_num)

    for x in range(0, len(rand_num), n):
        e_c = rand_num[x: n + x]

        if len(e_c) < n:
            e_c = e_c + [None for y in range(n - len(e_c))]
        yield e_c


def determinant():
    if num == 0:
        a_num = int(input("Задайте начальное число массива чисел: "))
        b_num = int(input("Задайте конечное число массива чисел: "))
        r_fun(a_num, b_num)
        func_chunks_num(r_fun())
        my_a = (np.array(list(func_chunks_num(r_fun(a_num, b_num), c_num=3))))

        a = (my_a[0][0] * my_a[1][1] * my_a[2][2])
        b = (my_a[0][0] * my_a[1][2] * my_a[2][1])
        c = (my_a[1][0] * my_a[0][1] * my_a[2][2])
        d = (my_a[0][2] * my_a[1][0] * my_a[2][1])
        e = (my_a[0][1] * my_a[1][2] * my_a[2][0])
        f = (my_a[0][2] * my_a[1][1] * my_a[2][0])
        z = (a - b - c + d + e - f)
        print("Собрали матрицу " + "\n", my_a)
        print("Определитель матрицы: ", z)
    elif num == 1:
        r_fun(1)
        func_chunks_num(r_fun())
        my_a = (np.array(list(func_chunks_num(r_fun(), c_num=3))))
        a = (my_a[0][0] * my_a[1][1] * my_a[2][2])
        b = (my_a[0][0] * my_a[1][2] * my_a[2][1])
        c = (my_a[1][0] * my_a[0][1] * my_a[2][2])
        d = (my_a[0][2] * my_a[1][0] * my_a[2][1])
        e = (my_a[0][1] * my_a[1][2] * my_a[2][0])
        f = (my_a[0][2] * my_a[1][1] * my_a[2][0])
        z = (a - b - c + d + e - f)
        print("Была матрица " + "\n", my_a)
        print("Определитель: ", z)
    else:
        print("неверный ввод")


if __name__ == '__main__':
    try:
        determinant()
    except Exception as e:
        print(e)