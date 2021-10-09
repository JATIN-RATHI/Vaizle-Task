import calendar


def fun(val):
    days_dict = {'Mon': 0, 'Tue': 0, 'Wed': 0, 'Thu': 0, 'Fri': 0, 'Sat': 0, 'Sun': 0}
    for j in val:
        date = j
        year, month, day = (int(i) for i in date.split('-'))
        day_number = calendar.weekday(year, month, day)
        days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        days_dict[days[day_number]] += val[j]
    print(days_dict)


x = {'2020-01-01': 4, '2020-01-02': 4, '2020-01-03': 6, '2020-01-04': 8, '2020-01-05': 2, '2020-01-06': -6,
     '2020-01-07': 2, '2020-01-08': -2}
fun(x)
