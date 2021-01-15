package com.logicbrace.goldprogram;

public class OldCustomer extends LendingLoan {
    public OldCustomer() {
        super();
    }

    @Override
    public float calculateLoan(int custID, int type, float wt, int fineness) throws WrongType, WrongFineness {
        float loan = 0;
        int baseFineness = 14;
        int baseFinenessPrice = 750;

        if (type == 0 && fineness >= baseFineness && fineness <= 24) {
            if (baseFineness == fineness) {
                loan = baseFinenessPrice;
            } else {
                loan = ((fineness - baseFineness) * 50) + baseFinenessPrice;
            }

        }

        return loan;
    }

    public float calculateLoan(int custID, int type, float wt, int fineness, int fees) throws WrongType {
        float loan = 0;
        if (fees != 0)
            throw new WrongType("Wrong Type of Customer");
        return loan;
    }
}


