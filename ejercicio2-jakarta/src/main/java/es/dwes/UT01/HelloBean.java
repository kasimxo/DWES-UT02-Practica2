package es.dwes.UT01;

import java.io.Serializable;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Objects;

import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {

    private List<Usuario> usuarios = List.of(
            new Usuario("Homer", "Simpson", "11111111A", "homer@yahoo.com", 45, new HashMap<String, Double>(){{
                put("enero", 1.0);
                put("febrero", 2.8);
                put("marzo", 19.2);
                put("abril", 76.0);
                put("mayo", 2.0);
                put("junio", 29.0);
                put("julio", 3.2);
                put("agosto", 15.4);
                put("septiembre", 52.4);
                put("octubre", null);
                put("noviembre", 13.1);
                put("diciembre", 9.0);
            }}),
            new Usuario("Marge", "Simpson", "11111111B", "marge@yahoo.com", 44,  new HashMap<String, Double>(){{
                put("enero", 1.0);
                put("febrero", null);
                put("marzo", 19.2);
                put("abril", null);
                put("mayo", 2.0);
                put("junio", 29.0);
                put("julio", 3.2);
                put("agosto", 15.4);
                put("septiembre", 52.4);
                put("octubre", 22.6);
                put("noviembre", 13.1);
                put("diciembre", null);
            }}),
            new Usuario("Bart", "Simpson", "11111111C", "bart@yahoo.com", 10, new HashMap<String, Double>(){{
                put("enero", 1.0);
                put("febrero", 2.8);
                put("marzo", 19.2);
                put("abril", 76.0);
                put("mayo", 2.0);
                put("junio", 29.0);
                put("julio", 3.2);
                put("agosto", 15.4);
                put("septiembre", 52.4);
                put("octubre", 22.6);
                put("noviembre", 13.1);
                put("diciembre", 9.0);
            }}),
            new Usuario("Lisa", "Simpson", "11111111D", "lisa@yahoo.com", 9,  new HashMap<String, Double>(){{
                put("enero", 1.0);
                put("febrero", 2.8);
                put("marzo", null);
                put("abril", null);
                put("mayo", 2.0);
                put("junio", 21.0);
                put("julio", null);
                put("agosto", 15.4);
                put("septiembre", 42.4);
                put("octubre", null);
                put("noviembre", null);
                put("diciembre", 9.0);
            }}),
            new Usuario("Maggie", "Simpson", "11111111E", "maggie@yahoo.com", 1,  new HashMap<String, Double>(){{
                put("enero", 10.0);
                put("febrero", 20.0);
                put("marzo", 30.0);
                put("abril", null);
                put("mayo", 32.0);
                put("junio", 29.0);
                put("julio", null);
                put("agosto", 15.4);
                put("septiembre", 52.4);
                put("octubre", null);
                put("noviembre", 63.0);
                put("diciembre", 9.0);
            }})            
        );

    public List<Usuario> getUsuarios(){
        return usuarios;
    }

    public static class Usuario {

        private String nombre;
        private String apellidos;
        private String dni;
        private String email;
        private int edad;
        private Map<String, Double> pagos;

        public Usuario(String nombre, String apellidos, String dni, String email, int edad, HashMap<String, Double> pagos){
            this.nombre = nombre;
            this.apellidos = apellidos;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            this.pagos = pagos;
        }

        public String getNombre() {
            return nombre;
        }

        public String getApellidos() {
            return apellidos;
        }

        public String getDni(){
            return dni;
        }

        public String getEmail(){
            return email;
        }

        public int getEdad() {
            return edad;
        }

        public Map<String, Double> getPagos(){
            return pagos;
        }

        public Double calculateTotal(){
            return pagos.values().stream().filter(Objects::nonNull).mapToDouble(Double::doubleValue).sum();
        }
    }    
}
