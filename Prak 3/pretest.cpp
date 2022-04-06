#include <iostream>
#include <string>
using namespace std;

class pangkat{
	friend ostream& operator<<(ostream&, pangkat&);
	friend istream& operator>>(istream&, pangkat&);
	public:
		pangkat(){};
		void hasil();
	private:
		float x,c;
		int y,i;
};

istream& operator>>(istream& input,pangkat& ketik){
	cout<<"Masukkan Angka= ";
	input>>ketik.x;
	cout<<"\nMasukkan Pangkat= ";
	input>>ketik.y;
	return input;
}

ostream& operator<<(ostream& output,pangkat& cetak){
	cout<<"hasil dari "<<cetak.x<<" pangkat "<<cetak.y<<" = "<<cetak.c;
	cout<<endl;
	return output;
}

void pangkat::hasil(){
	c=1;
	for(i=1;i<=y;i++){
		c=c*x;
	}
	cout<<endl;
}

int main()
{
	pangkat b;
	cin>>b;
	b.hasil();
	cout<<b<<endl;
	system("pause");
	return 0;
}
