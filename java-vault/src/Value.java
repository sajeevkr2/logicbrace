public class Value {
    int closestVal;
    Integer val1;
    Integer val2;

    public Value(int closestVal, Integer val1, Integer val2) {
        this.closestVal = closestVal;
        this.val1 = val1;
        this.val2 = val2;
    }

    public int getClosestVal() {
        return closestVal;
    }

    public void setClosestVal(int closestVal) {
        this.closestVal = closestVal;
    }

    public Integer getVal1() {
        return val1;
    }

    public void setVal1(Integer val1) {
        this.val1 = val1;
    }

    public Integer getVal2() {
        return val2;
    }

    public void setVal2(Integer val2) {
        this.val2 = val2;
    }
}
