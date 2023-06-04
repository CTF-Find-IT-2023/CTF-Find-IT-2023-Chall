def perform_operations(a, b, c, d):
    result = []

    # c xor d
    xor_result = a ^ d
    result.append(xor_result)

    # b + c
    sum_result = b + a
    result.append(sum_result)

    # a modulo inverse 1337
    mod_inverse = find_mod_inverse(c, 225925880321)
    result.append(mod_inverse)

    # b
    result.append(b)

    return result


def find_mod_inverse(num, modulo):
    y = 0
    x = 1
    last_y = 1
    last_x = 0
    original_modulo = modulo

    while modulo != 0:
        quotient = num // modulo
        temp = modulo
        modulo = num % modulo
        num = temp

        temp = x
        x = last_x - quotient * x
        last_x = temp

        temp = y
        y = last_y - quotient * y
        last_y = temp

    if last_x < 0:
        last_x += original_modulo

    return last_x



def process(inp):
    hex_string = inp
    for i in range(6):
        print("--------------------------------------------")
        print(i+1)

        hex_list = hex_string.split("-")
        decimal_list = []

        for hex_value in hex_list:
            decimal_value = int(hex_value, 16)
            decimal_list.append(decimal_value)

        result = perform_operations(decimal_list[0], decimal_list[1], decimal_list[2], decimal_list[3])

        hex_output = "-".join([hex(value)[2:].upper() for value in result])
        number_output = result

        print("Hex Input:", hex_string)
        print("Number Input:", decimal_list)
        print("Hex Output:", hex_output)
        print("Number Output:", number_output)
        
        hex_string = hex_output
    
    return hex_string

print(process("7B9-A34-2F6-E1C"))
