package com.logicbrace.goldprogram;

public abstract class LendingLoan {
    public int type;
    public int custID;
    public int loan;

    public LendingLoan() {

    }

    public abstract float calculateLoan(int custID, int type, float wt, int fineness) throws WrongType, WrongFineness;

    public abstract float calculateLoan(int custID, int type, float wt, int fineness, int fees) throws WrongType, WrongFineness;

    public float LiquidateLoan(int custID, float amount, float liqAmount) {
        float pendingamount = amount;
        if (liqAmount < 0) {
            pendingamount = pendingamount + liqAmount;
        }
        return pendingamount;
    }
}
