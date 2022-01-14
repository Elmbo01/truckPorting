import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VehiculoItemComponent } from './vehiculo-item.component';

describe('VehiculoItemComponent', () => {
  let component: VehiculoItemComponent;
  let fixture: ComponentFixture<VehiculoItemComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ VehiculoItemComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(VehiculoItemComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
