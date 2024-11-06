package adarsh;

class calculations {

    public static void main(String args[]) {
        int x, y, sub, sum, mul, div, rem;
        x = Integer.parseInt(args[0]);
        y = Integer.parseInt(args[1]);
        sum = x + y;
        sub = x - y;
        mul = x * y;
        div = x / y;
        rem = x % y;
        System.out.println("Sum is " + sum);
        System.out.println("Difference is " + sub);
        System.out.println("Product  is " + mul);
        System.out.println("Qutioent is " + div);
        System.out.println("Remainder is " + rem);

    }
}
