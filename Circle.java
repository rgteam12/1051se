public class Circle extends Shape2D { //¶ê
    private double radius; //¥b®|
    private static final double PI = 3.141592654; 
    public Circle(double r) {
        radius = r;
    }
    public double area() {
        return PI * radius * radius;
    }
}