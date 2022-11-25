my_A_rows = int(input("Введите число строк определителя (3 по умолчанию): "))
num = int(input("Введите знак вычисления(где 1 это +; 0 это - :"))

print("Введите матрицу коэфициентов (построчно, пробелы между коэффициентами")
myA = [list(map(float, (input(f"строка {i + 1}: ").split())))
       for i in range(my_A_rows)]

print("Начнем вычисление по правилу Саррюса:")


def determinant():
    if num == 1:
        print("Находим главную диагональ положительного знака...")
        a = (myA[0][0] * myA[1][1] * myA[2][2])
        print(a)
        print("Находим первый треугольник...")
        b = (myA[0][0] * myA[1][2] * myA[2][1])
        print(b)
        print("Находим второй треугольник...")
        c = (myA[1][0] * myA[0][1] * myA[2][2])
        print(c)
        print("Находим третий треугольник...")
        d = (myA[0][2] * myA[1][0] * myA[2][1])
        print(d)
        print("Находим четвертый треугольник...")
        e = (myA[0][1] * myA[1][2] * myA[2][0])
        print(e)
        print("Находим обратную диагональ..."),
        f = (myA[0][2] * myA[1][1] * myA[2][0])
        print(f)
        print("Считаем определитель матрицы...")
        z = (a - b - c + d + e - f)
        print(z)

    else:
        print("неверный ввод")


if __name__ == '__main__':
    try:
        determinant()
    except Exception as e:
        print(e)