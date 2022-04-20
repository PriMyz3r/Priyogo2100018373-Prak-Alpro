#include <iostream>
using namespace std;
    
int jumlah(int a, int jumlahsebelumnya) 
{
	if (jumlahsebelumnya==0){
		return a;
	}
	else {
		return jumlahsebelumnya + jumlah (a,jumlahsebelumnya==0);
	} 
}

int main() {
      
    int n, a,b=0,jumlahpertama;
    cout << "Masukan Batas laporan sampai berapa bulan :  ";
    cin >> n;
    cout <<"bulan ke 1 pendapatan ";cin>>a;
    jumlahpertama=jumlah(a,b);
  	cout<<"bulan ke 1 pendapatan "<<a<<" jumlah pendapatan adalah "<<jumlahpertama<<endl;
  	cout<<endl;
	
    for (int i = 2; i <= n; i++)
	{	  	
    cout <<"bulan ke "<<i<<" pendapatan ";cin>>a;
		cout<<"bulan ke "<<i<<" pendapatan "<<a<<" jumlah pendapatan adalah "<<jumlah(a,jumlahpertama)<<endl;
		jumlahpertama=jumlah(a,jumlahpertama);
		cout<<endl;
    }
	return 0;
}